<footer id="main-footer">
    <div class="wrapper footer-grid">
        <div class="footer-brand">
            <div class="logo">Job<span>Finder</span></div>
            <p>Empowering the next generation of professionals to find their dream careers through data-driven insights.
            </p>
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
                <li><a href="help.php">Help Center</a></li>
                <li><a href="privacy_policy.php">Privacy Policy</a></li>
                <li><a href="terms_of_service.php">Terms of Service</a></li>
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
            <div class="chat-header-main">
                <div class="chat-user-profile">
                    <div class="online-indicator"></div>
                    <div class="chat-user-details">
                        <span class="chat-bot-title">JobFinder Support</span>
                        <span class="chat-bot-status">Always online</span>
                    </div>
                </div>
                <button class="chat-close-x" onclick="toggleChat()">&times;</button>
            </div>

            <div class="chat-body-content" id="chatContent">
                <div class="msg-bubble bot-msg">
                    Hello! 👋 I'm your JobFinder assistant. How can I help you find your dream career today?
                </div>
            </div>

            <div class="chat-input-container">
                <input type="text" id="chatInput" placeholder="Type your question...">
                <button class="chat-send-icon"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>

        <button class="chat-toggle-btn" onclick="toggleChat()">
            <i class="fas fa-comment-dots"></i>
        </button>
    </div>
    </div>
</footer>
<script>
function toggleChat() {
    const chatWindow = document.getElementById('chatWindow');
    if (chatWindow.style.display === "flex") {
        chatWindow.style.display = "none";
    } else {
        chatWindow.style.display = "flex";
    }
}
</script>