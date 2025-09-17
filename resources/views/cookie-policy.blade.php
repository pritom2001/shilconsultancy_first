<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Policy | Shil Consultancy</title>
    <meta name="description" content="Learn about the cookies used on the Shil Consultancy website. This policy provides detailed information on how we use cookies to improve your experience.">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .policy-content h2 {
            font-size: 1.875rem; /* text-3xl */
            font-weight: 700;
            margin-top: 2.5rem; /* mt-10 */
            margin-bottom: 1rem; /* mb-4 */
            background: linear-gradient(to right, #a855f7, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .policy-content p {
            margin-bottom: 1rem; /* mb-4 */
            line-height: 1.75;
            color: #d1d5db; /* text-gray-300 */
        }
        .policy-content ul {
            list-style-type: disc;
            margin-left: 1.5rem; /* ml-6 */
            margin-bottom: 1rem; /* mb-4 */
            color: #d1d5db; /* text-gray-300 */
        }
        .policy-content a {
            color: #67e8f9; /* text-cyan-300 */
            text-decoration: underline;
        }
    </style>
</head>

<body class="grid-bg">

    @include('partials.header')

    <section class="pt-24 md:pt-32 pb-16">
        <div class="text-center max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl md:text-7xl font-bold mb-4 gradient-text">Cookie Policy</h1>
            <p class="text-lg text-gray-300">Last updated: September 17, 2025</p>
        </div>
    </section>

    <main class="py-10 pb-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 service-card rounded-xl p-6 md:p-10">
            <div class="policy-content">
                <h2>What Are Cookies?</h2>
                <p>Cookies are small text files that are placed on your computer or mobile device when you visit a website. They are widely used to make websites work, or work more efficiently, as well as to provide information to the owners of the site.</p>

                <h2>How We Use Cookies</h2>
                <p>We use cookies for a variety of reasons detailed below. Unfortunately, in most cases, there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in case they are used to provide a service that you use.</p>
                <p>We use cookies to:</p>
                <ul>
                    <li><strong>Understand and save user's preferences for future visits.</strong> This helps us personalize your experience.</li>
                    <li><strong>Compile aggregate data about site traffic and site interactions.</strong> This allows us to offer better site experiences and tools in the future. We may use third-party services like Google Analytics that track this information on our behalf.</li>
                    <li><strong>Ensure the security of our website and contact forms.</strong> Essential cookies help make our website usable by enabling basic functions.</li>
                </ul>

                <h2>Types of Cookies We Use</h2>
                <ul>
                    <li><strong>Essential Cookies:</strong> These are strictly necessary to provide you with services available through our website and to use some of its features, such as access to secure areas.</li>
                    <li><strong>Performance and Analytics Cookies:</strong> These cookies collect information about how you use our website, like which pages you visited and which links you clicked on. This information is aggregated and anonymized and used to help us improve how our website works.</li>
                    <li><strong>Marketing Cookies:</strong> These cookies are used to make advertising messages more relevant to you. They perform functions like preventing the same ad from continuously reappearing and, in some cases, selecting advertisements that are based on your interests.</li>
                </ul>

                <h2>Your Choices Regarding Cookies</h2>
                <p>You have the right to decide whether to accept or reject cookies. You can exercise your cookie preferences by setting or amending your web browser controls to accept or refuse cookies. If you choose to reject cookies, you may still use our website though your access to some functionality and areas of our website may be restricted.</p>
                <p>As the means by which you can refuse cookies through your web browser controls vary from browser to browser, you should visit your browser's help menu for more information.</p>
                
                <h2>Changes to This Cookie Policy</h2>
                <p>We may update this Cookie Policy from time to time in order to reflect, for example, changes to the cookies we use or for other operational, legal, or regulatory reasons. Please re-visit this Cookie Policy regularly to stay informed about our use of cookies and related technologies.</p>
                
                <h2>Contact Us</h2>
                <p>If you have any questions about our use of cookies or other technologies, please email us at <a href="mailto:hello@shilconsultancy.com">hello@shilconsultancy.com</a>.</p>
            </div>
        </div>
    </main>

    @include('partials.footer')

</body>
</html>