 // Mobile Menu Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('active');
            });

            document.addEventListener('click', function(event) {
                if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                    mobileMenu.classList.remove('active');
                }
            });

            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.remove('active');
                });
            });
        });

        // VS Code Tab Content Configuration
        const tabContents = {
            'services.js': {
                lines: 30,
                content: `
                    <div class="flex">
                        <div class="w-10 select-none">
                            ${Array.from({length: 30}, (_, i) => `<div class="line-number">${i+1}</div>`).join('')}
                        </div>
                        <div class="flex-1">
                            <div><span class="keyword">const</span> <span class="variable">shilConsultancy</span> = {</div>
                            <div>&nbsp;&nbsp;<span class="variable">name</span>: <span class="string">"Shil Consultancy Services"</span>,</div>
                            <div>&nbsp;&nbsp;<span class="variable">specialization</span>: [</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"Web Development"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"WordPress Solutions"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"Modern Web Technologies"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"Responsive Design"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"Performance Optimization"</span></div>
                            <div>&nbsp;&nbsp;],</div>
                            <div>&nbsp;&nbsp;<span class="variable">expertise</span>: <span class="function">()</span> => {</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">return</span> <span class="string">"Transforming ideas into pixel-perfect, high-performance websites"</span>;</div>
                            <div>&nbsp;&nbsp;},</div>
                            <div>&nbsp;&nbsp;<span class="variable">technologies</span>: [</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"WordPress"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"React"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"Node.js"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"Tailwind CSS"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"GraphQL"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"and more..."</span></div>
                            <div>&nbsp;&nbsp;],</div>
                            <div>&nbsp;&nbsp;<span class="variable">whyChooseUs</span>: [</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"10+ years of web development experience"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"Pixel-perfect implementations"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"Performance-focused approach"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"SEO-optimized solutions"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"Ongoing support & maintenance"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"Client-first philosophy"</span></div>
                            <div>&nbsp;&nbsp;]</div>
                            <div>};</div>
                            <div class="mt-4"><span class="comment">// Ready to build something amazing?</span></div>
                            <div><span class="keyword">const</span> <span class="variable">project</span> = <span class="function">await</span> <span class="variable">shilConsultancy</span>.<span class="function">createProject</span>(<span class="string">"Your Vision"</span>);<span class="cursor"></span></div>
                        </div>
                    </div>
                `
            },
            'why-us.md': {
                lines: 25,
                content: `
                    <div class="flex">
                        <div class="w-10 select-none">
                            ${Array.from({length: 25}, (_, i) => `<div class="line-number">${i+1}</div>`).join('')}
                        </div>
                        <div class="flex-1">
                            <div># Why Choose Us?</div>
                            <div class="my-4"></div>
                            <div>## 🚀 Performance Excellence</div>
                            <div>- Average page load time: **<1.5s**</div>
                            <div>- Lighthouse scores consistently **90+**</div>
                            <div>- Automated performance optimization pipeline</div>
                            <div class="my-4"></div>
                            <div>## 🔒 Security First</div>
                            <div>- Weekly security audits</div>
                            <div>- DDoS protection included</div>
                            <div>- SSL/TLS implementation</div>
                            <div class="my-4"></div>
                            <div>## 📈 SEO Optimized</div>
                            <div>- Semantic HTML structure</div>
                            <div>- Automated sitemap generation</div>
                            <div>- Schema markup implementation</div>
                            <div class="my-4"></div>
                            <div>## 🛠 Tech Stack</div>
                            <div>- **Frontend**: React, Next.js, Tailwind CSS</div>
                            <div>- **Backend**: Node.js, GraphQL, PostgreSQL</div>
                            <div>- **Tools**: Webpack, Babel, ESLint</div>
                        </div>
                    </div>
                `
            },
            'success-stories.json': {
                lines: 20,
                content: `
                    <div class="flex">
                        <div class="w-10 select-none">
                            ${Array.from({length: 20}, (_, i) => `<div class="line-number">${i+1}</div>`).join('')}
                        </div>
                        <div class="flex-1">
                            <div>[</div>
                            <div>&nbsp;&nbsp;{</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="variable">"client"</span>: <span class="string">"E-Commerce Platform"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="variable">"result"</span>: <span class="string">"Increased conversion rate by 40%"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="variable">"tech"</span>: [<span class="string">"Wordpress"</span>, <span class="string">"PHP"</span>, <span class="string">"MySQL"</span>]</div>
                            <div>&nbsp;&nbsp;},</div>
                            <div>&nbsp;&nbsp;{</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="variable">"client"</span>: <span class="string">"News Portal"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="variable">"result"</span>: <span class="string">"Reduced server costs by 60%"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="variable">"tech"</span>: [<span class="string">"WordPress"</span>, <span class="string">"Redis"</span>, <span class="string">"AWS"</span>]</div>
                            <div>&nbsp;&nbsp;},</div>
                            <div>&nbsp;&nbsp;{</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="variable">"client"</span>: <span class="string">"SaaS Startup"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="variable">"result"</span>: <span class="string">"Scaled to 50k active users"</span>,</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="variable">"tech"</span>: [<span class="string">"Next.js"</span>, <span class="string">"GraphQL"</span>, <span class="string">"Docker"</span>]</div>
                            <div>&nbsp;&nbsp;}</div>
                            <div>]</div>
                        </div>
                    </div>
                `
            },
            'process.config': {
                lines: 15,
                content: `
                    <div class="flex">
                        <div class="w-10 select-none">
                            ${Array.from({length: 15}, (_, i) => `<div class="line-number">${i+1}</div>`).join('')}
                        </div>
                        <div class="flex-1">
                            <div><span class="comment"># Development Process Configuration</span></div>
                            <div class="my-2"></div>
                            <div>[requirements]</div>
                            <div>discovery_days = 3</div>
                            <div>wireframing = true</div>
                            <div class="my-2"></div>
                            <div>[development]</div>
                            <div>code_reviews = true</div>
                            <div>testing_coverage = 95</div>
                            <div>daily_updates = true</div>
                            <div class="my-2"></div>
                            <div>[deployment]</div>
                            <div>ci_cd = true</div>
                            <div>monitoring = "datadog"</div>
                            <div>backups = "daily"</div>
                        </div>
                    </div>
                `
            }
        };

        // Tab Switching Functionality
        const tabs = document.querySelectorAll('.editor-tab');
        const editorContent = document.getElementById('editor-content');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                const fileName = tab.textContent.trim();
                editorContent.innerHTML = tabContents[fileName].content;
            });
        });

        // Initialize with first tab content
        editorContent.innerHTML = tabContents['services.js'].content;

        // Terminal Simulation
        const terminalContent = document.getElementById('terminal-content');
        const terminalCursor = document.getElementById('terminal-cursor');
        
        const terminalScript = [
            { text: "Welcome to Shil Consultancy Services Terminal", delay: 50, prompt: false },
            { text: "Initializing project setup...", delay: 30, prompt: true },
            { text: "✔ Checking system requirements", delay: 20, prompt: false },
            { text: "✔ Verifying dependencies", delay: 20, prompt: false },
            { text: "✔ Creating project structure", delay: 20, prompt: false },
            { text: "Project initialized successfully!", delay: 50, prompt: true },
            { text: "Installing @shil/consultancy package...", delay: 30, prompt: true },
            { text: "added 42 packages in 2s", delay: 20, prompt: false },
            { text: "Package installed successfully!", delay: 50, prompt: true },
            { text: "Running build process...", delay: 30, prompt: true },
            { text: "✔ Compiled successfully", delay: 20, prompt: false },
            { text: "✔ Optimized assets", delay: 20, prompt: false },
            { text: "✔ Minified JavaScript and CSS", delay: 20, prompt: false },
            { text: "✔ Generated production build", delay: 20, prompt: false },
            { text: "Build completed in 4.2s", delay: 50, prompt: true },
            { text: "Starting development server...", delay: 30, prompt: true },
            { text: "✔ Server running on http://localhost:3000", delay: 20, prompt: false },
            { text: "✔ Live reload enabled", delay: 20, prompt: false },
            { text: "✔ Ready for development", delay: 50, prompt: true },
            { text: "Running Lighthouse audit...", delay: 30, prompt: true },
            { text: "✔ Performance: 98", delay: 20, prompt: false },
            { text: "✔ Accessibility: 100", delay: 20, prompt: false },
            { text: "✔ Best Practices: 100", delay: 20, prompt: false },
            { text: "✔ SEO: 100", delay: 20, prompt: false },
            { text: "Audit completed with excellent scores!", delay: 50, prompt: true },
            { text: "Ready to deploy to production? (y/n)", delay: 30, prompt: true }
        ];
        
        let currentLine = 0;
        
        function typeTerminal() {
            if (currentLine >= terminalScript.length) {
                currentLine = 0;
                terminalContent.innerHTML = '';
            }
            
            const line = terminalScript[currentLine];
            const newLine = document.createElement('div');
            
            if (line.prompt) {
                newLine.innerHTML = `<span class="terminal-prompt">$</span> `;
            }
            
            terminalContent.appendChild(newLine);
            
            let i = 0;
            const typingInterval = setInterval(() => {
                if (i < line.text.length) {
                    newLine.innerHTML += line.text.charAt(i);
                    i++;
                } else {
                    clearInterval(typingInterval);
                    currentLine++;
                    setTimeout(typeTerminal, 1000);
                }
            }, line.delay);
            
            // Scroll to bottom
            terminalContent.parentElement.scrollTop = terminalContent.parentElement.scrollHeight;
        }
        
        // Start terminal typing
        setTimeout(typeTerminal, 1000);