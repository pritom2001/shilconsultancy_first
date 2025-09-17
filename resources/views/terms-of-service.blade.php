<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service | Shil Consultancy</title>
    <meta name="description" content="Read the Terms of Service for Shil Consultancy. Understand the rules and guidelines for using our website and engaging our digital marketing and web development services.">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .terms-content h2 {
            font-size: 1.875rem; /* text-3xl */
            font-weight: 700;
            margin-top: 2.5rem; /* mt-10 */
            margin-bottom: 1rem; /* mb-4 */
            background: linear-gradient(to right, #a855f7, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .terms-content p {
            margin-bottom: 1rem; /* mb-4 */
            line-height: 1.75;
            color: #d1d5db; /* text-gray-300 */
        }
        .terms-content ul {
            list-style-type: disc;
            margin-left: 1.5rem; /* ml-6 */
            margin-bottom: 1rem; /* mb-4 */
            color: #d1d5db; /* text-gray-300 */
        }
         .terms-content a {
            color: #67e8f9; /* text-cyan-300 */
            text-decoration: underline;
        }
    </style>
</head>

<body class="grid-bg">

    @include('partials.header')

    <section class="pt-24 md:pt-32 pb-16">
        <div class="text-center max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl md:text-7xl font-bold mb-4 gradient-text">Terms of Service</h1>
            <p class="text-lg text-gray-300">Last updated: September 17, 2025</p>
        </div>
    </section>

    <main class="py-10 pb-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 service-card rounded-xl p-6 md:p-10">
            <div class="terms-content">
                <h2>1. Agreement to Terms</h2>
                <p>By accessing our website, shilconsultancy.com, or engaging our services, you agree to be bound by these Terms of Service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site.</p>

                <h2>2. Services</h2>
                <p>Shil Consultancy provides a range of digital services including, but not limited to, Web Design & Development, E-Commerce Development, Social Media Marketing, Content Creation, Brand Strategy, and Search Engine Optimization. The specific scope, deliverables, and fees for any service will be outlined in a separate, formal agreement or proposal.</p>

                <h2>3. Intellectual Property</h2>
                <p>The content, layout, design, data, databases, and graphics on this website are protected by intellectual property laws and are owned by Shil Consultancy, unless otherwise stated. Unless expressly permitted in writing, you may not copy, distribute, or create derivative works from any part of the website or our deliverables.</p>

                <h2>4. User Responsibilities</h2>
                <p>You agree to use our website and services for lawful purposes only. You must not use our website to:</p>
                <ul>
                    <li>Post or transmit any material that is disruptive or offensive.</li>
                    <li>Engage in any activity that would constitute a criminal offense or give rise to civil liability.</li>
                    <li>Provide false or misleading information in your communications with us.</li>
                </ul>

                <h2>5. Limitation of Liability</h2>
                <p>In no event shall Shil Consultancy or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on our website or the services provided, even if we have been notified orally or in writing of the possibility of such damage.</p>

                <h2>6. Payment Terms</h2>
                <p>Fees for our services will be defined in a project-specific proposal or contract. Payments are to be made according to the schedule outlined in that agreement. We reserve the right to suspend or terminate services for non-payment of fees.</p>

                <h2>7. Governing Law</h2>
                <p>These terms and conditions are governed by and construed in accordance with the laws of Bangladesh, and you irrevocably submit to the exclusive jurisdiction of the courts in Chittagong, Bangladesh.</p>

                <h2>8. Changes to These Terms</h2>
                <p>We reserve the right to revise these terms of service at any time without notice. By using this website, you are agreeing to be bound by the then-current version of these terms of service.</p>

                <h2>9. Contact Us</h2>
                <p>If you have any questions about these Terms, please contact us at <a href="mailto:hello@shilconsultancy.com">hello@shilconsultancy.com</a>.</p>
            </div>
        </div>
    </main>

    @include('partials.footer')

</body>
</html>