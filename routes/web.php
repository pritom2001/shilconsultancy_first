<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\PublicBlogController;
use App\Http\Controllers\CommentController;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file registers all the web routes for your application.
| Routes are organized into public-facing and authenticated sections.
|
*/

// Public-Facing Routes
// These routes do not require authentication.
Route::get('/', [HomeController::class, 'index'])->name('home');

// Public Blog Routes
Route::get('/blog', [PublicBlogController::class, 'index'])->name('public.blogs.index');
Route::get('/blog/category/{slug}', [PublicBlogController::class, 'category'])->name('public.blogs.category');
Route::get('/articles/{blog:slug}', [PublicBlogController::class, 'show'])->name('public.blogs.show');
Route::post('/articles/{blog:slug}/comment', [PublicBlogController::class, 'storeComment'])->name('public.blogs.comment');
// Comment Route
// The blog slug is used to find the correct article
Route::post('/articles/{blog:slug}/comments', [CommentController::class, 'store'])->name('comments.store');

// About Us Routes
Route::prefix('about-us')->group(function () {
    Route::get('/', [AboutUsController::class, 'index'])->name('aboutUs.index');
    Route::get('/team-member', [AboutUsController::class, 'teamMember'])->name('aboutUs.team-member');
});

// Services Routes
Route::prefix('services')->group(function () {
    Route::get('/web-development', [ServiceController::class, 'webDevelopment'])->name('services.web');
    Route::get('/ecommerce-development', [ServiceController::class, 'ecommerceDevelopment'])->name('services.ecommerce');
    Route::get('/social-media-marketing', [ServiceController::class, 'socialMediaMarketing'])->name('services.smm');
    Route::get('/content-creation', [ServiceController::class, 'contentCreation'])->name('services.content');
    Route::get('/brand-strategy', [ServiceController::class, 'brandStrategy'])->name('services.brand');
    Route::get('/seo-analysis', [ServiceController::class, 'seoAnalysis'])->name('services.seo');
});

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard Routes
// These routes are only accessible to authenticated users.
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Dashboard Access Control
    Route::get('/access_control', function () {
        $users = User::all();
        return view('dashboard.access_control', compact('users'));
    })->name('access_control');

    Route::post('/access_control/store', function (Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|in:admin,manager,developer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('users', 'public');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'image' => $imagePath,
        ]);

        return redirect()->route('access_control')->with('success', 'User added successfully!');
    })->name('access_control.store');

    // Route to show the user edit form
    Route::get('/users/{user}/edit', function (User $user) {
        return view('dashboard.user_edit', compact('user'));
    })->name('users.edit');
    
    // Route to handle user deletion
    Route::delete('/users/{user}', function (User $user) {
        // Delete the user's image if it exists
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }
        $user->delete();
        return redirect()->route('access_control')->with('success', 'User deleted successfully!');
    })->name('users.destroy');

    // Route to handle user updates
    Route::put('/users/{user}', function (Request $request, User $user) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8',
            'role' => 'required|in:admin,manager,developer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
            $imagePath = $request->file('image')->store('users', 'public');
            $user->image = $imagePath;
        }

        $user->save();

        return redirect()->route('access_control')->with('success', 'User updated successfully!');
    })->name('users.update');

    // Blog Routes (within the dashboard)
    // Using the BlogsController from the root App\Http\Controllers namespace
     Route::resource('blogs', AdminBlogController::class)->names('dashboard.blogs');
});
Route::get('/dashboard/unauthorized-access', function () {
    return view('dashboard.unauthorized');
})->name('unauthorized.access')->middleware('auth');

// Add this route to your web.php file


Route::post('/dashboard/blogs/upload', [AdminBlogController::class, 'upload'])->name('dashboard.blogs.upload');

// Career Page Route
Route::view('/careers', 'career')->name('careers');

// Privacy Policy Route
Route::view('/privacy-policy', 'privacy-policy')->name('privacy.policy');

// Terms of Service Route
Route::view('/terms-of-service', 'terms-of-service')->name('terms.of.service');
// Cookie Policy Route
Route::view('/cookie-policy', 'cookie-policy')->name('cookie.policy');

//send message emails
Route::post('/send-message', [ContactController::class, 'send'])->name('send.message');