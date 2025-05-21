<footer>
  <div class="footer-container">

    <!-- Logo and description -->
    <div class="footer-logo">
      <img src="bootstrap/images/Prawas_logo_round.png.png" alt="logo">
      <h2>Prawas Tours</h2>
      <p>Welcome to Prawas Tours and Travel, your trusted companion for discovering the diverse beauty of Maharashtra.</p>
      <div class="social-icons">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-google"></i></a>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="footer-section">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="about-us.php">About Us</a></li>
        <li>Contact Us</li>
        <li><a href="package.php">Package</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div class="footer-section footer-contact">
      <h4>Contact</h4>
      <ul>
        <li><i class="bi bi-telephone"></i> +91 8806082965 & +91 9561292863</li>
        <li><i class="bi bi-envelope"></i> prawastours@gmail.com</li>
        <li><i class="bi bi-alt"></i> Shop No.1, Kharade Building, Pune-Nashik Road, Near Nulife Hospital,<br> Gavthan Vasti, Bhosari, Pune – 411039</li>
      </ul>
    </div>

    <!-- Gallery -->
    <div class="footer-section">
      <h4>Gallery</h4>
      <div class="footer-gallery">
        <img src="bootstrap/images/footer-img-1.jpg" alt="">
        <img src="bootstrap/images/footer-img-2.png" alt="">
        <img src="bootstrap/images/footer-img-3.png" alt="">
        <img src="bootstrap/images/footer-img-4.png" alt="">
        <img src="bootstrap/images/footer-img-5.png" alt="">
        <img src="bootstrap/images/footer-img-6.png" alt="">





      </div>
    </div>
  </div>

  <div class="footer-bottom">
    © 2025 Prawas Tours. All Rights Reserved
    <div class="footer-icons">
      <i class="bi bi-facebook-f"></i>
      <i class="bi bi-instagram"></i>
      <i class="bi bi-linkedin-in"></i>
      <i class="bi bi-pinterest-p"></i>
      <i class="bi bi-twitter"></i>
    </div>
  </div>
</footer>


<!-- JS for Scroll -->
<script>

    function showcardtTab(cardtTabId) {
        document.querySelectorAll('.cardtTab').forEach(cardtTab => cardtTab.classList.remove('active'));
        document.querySelectorAll('.cardtTab-content').forEach(content => content.classList.remove('active'));

        document.querySelector(`.cardtTab[onclick*="${cardtTabId}"]`).classList.add('active');
        document.getElementById(cardtTabId).classList.add('active');
    }

    function scrollCardsDest(direction) {
        const container = document.getElementById("DestContainer");
        const scrollAmount = 330; // adjust based on card width
        container.scrollBy({
            left: direction * scrollAmount,
            behavior: "smooth"
        });
    }
    function scrollfactDest(direction) {
        const container = document.getElementById("fact-div");
        const scrollAmount = 150; // adjust based on card width
        container.scrollBy({
            left: direction * scrollAmount,
            behavior: "smooth"
        });
    }
    function scrollCards(direction) {
        const container = document.getElementById("cardContainer");
        const scrollAmount = 330; // adjust based on card width
        container.scrollBy({
            left: direction * scrollAmount,
            behavior: "smooth"
        });
    }
    const reviews = [
        {
            name: "Dipanshu Sharma",
            star: "★★★★★",
            text: "It was a very well organised trip. Good timing, good food and very excellent Operator Kaka. The driver made our journey comfortable. Overall a very comfortable and excellent trip.",
            image: "bootstrap/images/profile.jpg"
        },
        {
            name: "Anita Verma",
            star: "★★★★",
            text: "Amazing service and coordination! The staff was friendly and everything was perfectly planned.",
            image: "bootstrap/images/profile.jpg"
        },
        {
            name: "Rahul Nair",
            star: "★★★",
            text: "A seamless experience from booking to journey. Highly recommended for anyone looking for a hassle-free trip.",
            image: "bootstrap/images/profile.jpg"
        }
    ];

    let current = 0;

    function updateReview() {
        document.getElementById("reviewer-name").innerText = reviews[current].name;
        document.getElementById("review-text").innerText = reviews[current].text;
        document.getElementById("reviewer-name-footer").innerText = reviews[current].name;
        document.getElementById("reviewer-img").src = reviews[current].image;
        document.getElementById("review-stars").innerText = reviews[current].star;

    }

    function nextReview() {
        current = (current + 1) % reviews.length;
        updateReview();
    }

    function prevReview() {
        current = (current - 1 + reviews.length) % reviews.length;
        updateReview();
    }
    const tours = [
        { name: "Bali & Indonesia Tour", price: 7500, days: 10, rating: 6.3, image: "bootstrap/images/tour-img-2.png", date: "2025-06-01" },
        { name: "Maldives Getaway", price: 12500, days: 7, rating: 8.1, image: "bootstrap/images/tour-img-3.png", date: "2025-04-15" },
        { name: "Thailand Adventure", price: 9800, days: 5, rating: 7.2, image: "bootstrap/images/tour-img-3.png", date: "2025-07-10" },
        { name: "Sri Lanka Explorer", price: 6700, days: 9, rating: 6.7, image: "bootstrap/images/tour-img-2.png", date: "2025-05-20" },
        { name: "Dubai City Tour", price: 8200, days: 6, rating: 8.5, image: "bootstrap/images/tour-img-1.png", date: "2025-03-18" },
    ];

    function renderTours(list) {
        const container = document.getElementById("tour-list");
        container.innerHTML = "";
        list.forEach(tour => {
            container.innerHTML += `
          <div class="card card-new">
            <img src="${tour.image}" alt="${tour.name}">
            <div class="card-content">
              <div class="d-card-flex"><h3>${tour.name}</h3> <h3 class="highlight">Rs. ${tour.price}</h3></div>
              <p> ${tour.rating} Rating</p>
              <p>Awesome experience guaranteed.</p>
              <div class="d-card-flex">
                <p> ${tour.days} Days</p>
                <p> 2 Adults</p>
              </div>
            </div>
          </div>`;
        });
    }

    function sortTours(method) {
        let sorted = [...tours];
        if (method === "low") sorted.sort((a, b) => a.price - b.price);
        else if (method === "high") sorted.sort((a, b) => b.price - a.price);
        else if (method === "name") sorted.sort((a, b) => a.name.localeCompare(b.name));
        else if (method === "date") sorted.sort((a, b) => new Date(a.date) - new Date(b.date));
        renderTours(sorted);
    }

    document.querySelectorAll(".tab-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            document.querySelectorAll(".tab-btn").forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
            const sortBy = btn.getAttribute("data-sort");
            sortTours(sortBy);
        });
    });

    sortTours("date");
    function showTestimonial(index) {
        const testimonials = document.querySelectorAll('.testimonial');
        const dots = document.querySelectorAll('.dot');

        testimonials.forEach((t, i) => {
            t.classList.remove('active');
            dots[i].classList.remove('active');
        });

        testimonials[index].classList.add('active');
        dots[index].classList.add('active');
    }
</script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>