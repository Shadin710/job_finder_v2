<footer id="main-footer">
        <div class="wrapper footer-grid">
            <div class="footer-brand">
                <div class="logo">Job<span>Finder</span></div>
                <p>Empowering the next generation of professionals to find their dream careers through data-driven insights.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="seeker_login.php">Find Jobs</a></li>
                    <li><a href="provider_login.php">Post a Job</a></li>
                    <li><a href="admin.php">Admin Login</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="privacy_policy.php">Privacy Policy</a></li>
                    <li><a href="terms_of_service.php">Terms of Service</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-newsletter">
                <h4>Stay Updated</h4>
                <p>Subscribe to get the latest job alerts.</p>
                <form action="#" class="newsletter-form">
                    <input type="email" placeholder="Email address" required>
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 JobFinder. All Rights Reserved.</p>
        </div>
        <div class="chat-wrapper">
            <div class="chat-window" id="chatWindow">
            <div class="chat-header">
                <div class="chat-status"></div>
                <span>JobFinder Support</span>
                <button onclick="toggleChat()">&times;</button>
            </div>
            <div class="chat-body">
                <div class="message bot">
                    Hello! 👋 How can I help you find your dream job today?
                </div>
            </div>
            <div class="chat-footer">
                <input type="text" placeholder="Type a message...">
                <button><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>

        <button class="chat-toggle-btn" onclick="toggleChat()">
            <i class="fas fa-comments"></i>
        </button>
    </div>
    </footer>
<script>
    function toggleChat() {
        const chatWindow = document.getElementById('chatWindow');
        // Check if display is currently none or empty
        if (chatWindow.style.display === "none" || chatWindow.style.display === "") {
            chatWindow.style.display = "flex";
        } else {
            chatWindow.style.display = "none";
        }
        console.log("Chat toggled: " + chatWindow.style.display);
    }
</script>