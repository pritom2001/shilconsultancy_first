<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Shil Consultancy</title>
    <meta name="description" content="Read the Privacy Policy for Shil Consultancy. Learn how we collect, use, and protect your personal information when you use our website and services.">
    
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
        .policy-content h3 {
            font-size: 1.5rem; /* text-2xl */
            font-weight: 600;
            margin-top: 2rem; /* mt-8 */
            margin-bottom: 0.75rem; /* mb-3 */
            color: #ffffff;
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
            <h1 class="text-5xl md:text-7xl font-bold mb-4 gradient-text">Privacy Policy</h1>
            <p class="text-lg text-gray-300">Last updated: September 17, 2025</p>
        </div>
    </section>

    <main class="py-10 pb-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 service-card rounded-xl p-6 md:p-10">
            <div class="policy-content">
                <p>Shil Consultancy ("us", "we", or "our") operates the shilconsultancy.com website (the "Service"). This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data.</p>

                <h2>Information Collection and Use</h2>
                <p>We collect several different types of information for various purposes to provide and improve our Service to you.</p>

                <h3>Types of Data Collected</h3>
                <h4>Personal Data</h4>
                <p>While using our Service, especially when you contact us through our contact form, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you ("Personal Data"). This may include, but is not limited to:</p>
                <ul>
                    <li>Full Name</li>
                    <li>Email Address</li>
                    <li>Phone Number</li>
                    <li>The service you are interested in</li>
                </ul>
                
                <h4>Usage Data</h4>
                <p>We may also collect information on how the Service is accessed and used ("Usage Data"). This Usage Data may include information such as your computer's Internet Protocol address (e.g., IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, and other diagnostic data.</p>

                <h2>Use of Data</h2>
                <p>Shil Consultancy uses the collected data for various purposes:</p>
                <ul>
                    <li>To provide and maintain our Service</li>
                    <li>To respond to your inquiries and fulfill your requests for a consultation</li>
                    <li>To provide you with marketing materials, with your consent</li>
                    <li>To monitor the usage of our Service and improve its functionality</li>
                    <li>To detect, prevent and address technical issues</li>
                </ul>

                <h2>Data Security</h2>
                <p>The security of your data is important to us, but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>

                <h2>Service Providers</h2>
                <p>We may employ third-party companies and individuals to facilitate our Service ("Service Providers"), provide the Service on our behalf, or assist us in analyzing how our Service is used. These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>

                <h2>Links to Other Sites</h2>
                <p>Our Service may contain links to other sites that are not operated by us. If you click a third-party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit. We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>

                <h2>Changes to This Privacy Policy</h2>
                <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page. You are advised to review this Privacy Policy periodically for any changes.</p>
                
                <h2>Contact Us</h2>
                <p>If you have any questions about this Privacy Policy, please contact us:</p>
                <ul>
                    <li>By email: hello@shilconsultancy.com</li>
                    <li>By phone: +880 1768 013249</li>
                    <li>By visiting our office: 1054, 5th floor, Rahim manson, Suborna R/A, Golpahar, Chittagong, Bangladesh</li>
                </ul>
            </div>
        </div>
    </main>

    @include('partials.footer')

</body>
</html>