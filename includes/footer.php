<footer>
<button onclick="scrollToTop()" id="backToTopBtn" title="Go to top">↑</button>
    <div class="footer-container">
  
      <div class="footer-logo">
        <img src="bootstrap/images/Prawas_logo_round.png.png" alt="logo">
        <h2>Prawas Tours</h2>
        <p>Welcome to Prawas Tours and Travel, your trusted companion for discovering the diverse beauty of Maharashtra.</p>
        <div class="social-icons">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
  
      
      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
          <li><a href="package.php">Package</a></li>
        </ul>
      </div>
  
     
      <div class="footer-section footer-contact">
        <h4>Contact</h4>
        <ul>
          <li><i class="bi bi-telephone-fill"></i> <label for=""><label for="">+91 8806082965</label><br><label for="">+91 9561292863</label></label></li>
          <li><i class="bi bi-envelope-fill"></i> <label for="">prawastours@gmail.com</label></li>
          <li><i class="bi bi-geo-alt-fill"></i> <label for="">Shop No.1, Kharade Building, Pune-Nashik Road, Near Nulife Hospital, Gavthan Vasti, Bhosari, Pune – 411039</label></li>
        </ul>
      </div>
  
     
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
    PRAWAS TOURS © 2024 All Right Reserved. Powered By Edmeta.
      <div class="footer-icons">
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
      
      </div>
    </div>
  </footer>
  
  
  <!-- JS for Scroll -->
  <script>
  

  
  function scrollCardsDest(direction) {
    const activeTabContent = document.querySelector('.cardtTab-content');

    if (activeTabContent) {
        const container = activeTabContent.querySelector('.DestContainer');
        const scrollAmount = window.innerWidth <= 768 ? 261 : 340;

        if (container) {
            container.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }
    }
}
      function scrollfactDest(direction) {
          const container = document.getElementById("fact-div");
          const scrollAmount = 150; 
          container.scrollBy({
              left: direction * scrollAmount,
              behavior: "smooth"
          });
      }
  
      function scrollCards(direction) {
    const container = document.getElementById("cardContainer");

    const desktopScrollAmount = 345;
    const mobileScrollAmount = 280;

    const isMobile = window.innerWidth <= 768; 

    const scrollAmount = isMobile ? mobileScrollAmount : desktopScrollAmount;

    container.scrollBy({
        left: direction * scrollAmount,
        behavior: "smooth"
    });
}

      const reviews = [
        {
              name: "Dr Manisha Pathak Mr. Bhushan Pathak Vadodara",
              star: "★★★★★",
              text: "Our Ashtavinayak Ganpati and Bhimashankar Jyotirlinga trip was organised very well..... Tour plan, commute vehicle - Ertiga car, Hotel stay was very comfortable, luxurious and joyful experience Food arrangement were excellent - Yummy Our companian - tour guide driver Mr . Shivaji Pawar was excellent in his services Made us feel at home Our 3 days tour was wonderful experience It has created life time memories 😍 We would like to thank entire team for excellent services 🙏",
              image: "bootstrap/images/profile.jpg"
          },
          {
              name: "Dipanshu Sharma",
              star: "★★★★★",
              text: "All over experience was good .I recently had the pleasure of visiting Bhimshankar, and the entire experience was outstanding, thanks to the excellent service provided by Prawas Travels (Sandeep ji).The Driver named Ravi was also knowledgeable about the area’s history, culture,and perfect in driving.Recommend him to my relatives for this trip.😊",
              image: "bootstrap/images/profile.jpg"
          },
          {
              name: "Pervin Sadekar",
              star: "★★★★",
              text: "It was a very well organised trip. Good timing, good food and very excellent Operator Kaka. The driver made our journey comfortable. Overall a very comfortable and excellent trip.",
              image: "bootstrap/images/profile.jpg"
          },
          {
              name: "Sarveshkumar Rastogi",
              star: "★★★",
              text: "Prawas Travel plan was like plan tailored for us. Our interactive experience were excellent - communication, car quality,driver's behaviour, break fast and food all were meticulously planned. Our heartfel appreciation for the Admin team .",
              image: "bootstrap/images/profile.jpg"
          },
          {
              name: "Gaytri Ahire",
              star: "★★★",
              text: "Overall, I had a wonderful experience and thoroughly enjoyed the tour. The itinerary was well-planned, and the guide was knowledgeable and engaging.Additionally, the transportation provided was comfortable as I had hoped.I want to emphasize that I appreciated the effort put into making the tour enjoyable. The sights we visited were stunning, and the overall experience was memorable.",
              image: "bootstrap/images/profile.jpg"
          },
          {
              name: "Santosh More",
              star: "★★★",
              text: "I embarked on the Ashtavinayak Yatra with Prawas in January 2024, a trip that proved to be both enjoyable and a great value for money. Although I traveled alone, I met fellow travelers who had journeyed all the way from the USA to accompany their parents residing in Pune. The journey was filled with lively bus dances, simple yet delicious vegetarian meals, and comfortable, secure accommodations in the Trust's rooms.",
              image: "bootstrap/images/profile.jpg"
          },
          {
              name: "Dyandeo Adhav",
              star: "★★★",
              text: "I embarked on the Ashtavinayak Yatra with Prawas in January 2024, a trip that proved to be both enjoyable and a great value for money. Although I traveled alone, I met fellow travelers who had journeyed all the way from the USA to accompany their parents residing in Pune. The journey was filled with lively bus dances, simple yet delicious vegetarian meals, and comfortable, secure accommodations in the Trust's rooms.",
              image: "bootstrap/images/profile.jpg"
          },
          {
              name: "Suraj Patankar",
              star: "★★★",
              text: "I recently booked a trip with Pravas Travels and had a great experience! The staff were friendly and helpful, making the planning process smooth and stress-free. They took care of all the details, from travel to accommodations, and offered some fantastic recommendations along the way. I would definitely recommend Pravas Travels to anyone looking for a hassle-free and enjoyable travel experience.!",
              image: "bootstrap/images/profile.jpg"
          },
          {
              name: "Shraddha Chouhan",
              star: "★★★",
              text: "It was wonderful experience with pravas tours. Guide ,driver also excellent and very thankful to other staff.. good facilities,hotel facilities,time management excellent. Bhot bhot thank you karande kaka and driver to make this journey fun loving and safe travels.",
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
      document.addEventListener("DOMContentLoaded", function () {
    const reviewText = document.getElementById("review-text");
    if(reviewText){

    reviewText.addEventListener("click", function () {
      reviewText.classList.toggle("expanded");
    });}
  });
  document.addEventListener("DOMContentLoaded", () => {
      const tours = [
        
          { name: "Ashtavinayak Darshan", price: 2590, days: "Every Saturday (2 Days / 1 Night)" , rating: 5, image: "bootstrap/images/tour01.png", date: "2025-06-03",link: "Ashtavinayak-Darshan.php" },
          { name: "Akara Maruti – Kolhapur Narasoba Wadi", price: 4990 , days: "Every Saturday (2 Days / 1 Night)", rating: 5, image: "bootstrap/images/tour02.png", date: "2025-06-03",link: "Akara-Maruti.php" },
          { name: "Alibag - Nagaon - Murud Janjira", price: 4990 , days: "Every Friday (2 Days / 1 Night)", rating: 5, image: "bootstrap/images/tour03.png", date: "2025-06-03",link: "Alibag-details.php" },
          { name: "Aurangabad - Ajanta - Ellora", price: 4990 , days: "Every Saturday (2 Days / 1 Night)", rating: 5, image: "bootstrap/images/tour04.png", date: "2025-06-03",link: "Aurangabad-details.php" },
          { name: "Diveagar – Dapoli - Kelshi", price: 7500 , days: "Every Friday (3 Days / 2 Night)", rating: 5, image: "bootstrap/images/tour05.png", date: "2025-06-03",link: "Diveagar-details.php" },
          { name: "Ganapatipule – Guhagar", price: 7500 , days: "Every Friday (3 Days / 2 Night)", rating: 5, image: "bootstrap/images/tour06.png", date: "2025-06-03",link: "Ganapatipule.php" },
          { name: "Mahabaleshwar – Pratapgad", price: 4990 , days: "Every Saturday (2 Days / 1 Night)", rating: 5, image: "bootstrap/images/tour07.png", date: "2025-06-03",link: "Mahabaleshwar-details.php" },
          { name: "Panch Jyotirling", price: 7999 , days: "Every Friday (4 Days / 3 Night)", rating: 5, image: "bootstrap/images/tour08.png", date: "2025-06-03",link: "Panch-Jyotirling.php" },
          { name: "Bhimashankar", price: 999 , days: "Every Day One Day Trip", rating: 5, image: "bootstrap/images/tour09.png", date: "2025-06-03",link: "Bhimashankar-details.php" },
          { name: "Tarkarli –Malvan- Sindhudurga", price: 7990 , days: "Every Friday (3 Days / 2 Night)", rating: 5, image: "bootstrap/images/tour010.png", date: "2025-06-03",link: "Tarkarli –Malvan.php" },
          { name: "Pune Darshan", price: 999 , days: "Every Day One Day Trip", rating: 5, image: "bootstrap/images/tour011.png", date: "2025-06-03",link: "Pune-Darshan.php" },
          { name: "Shri Shani Shingnapur - Shirdi", price: 1111 , days: "Every Day One Day Trip", rating: 5, image: "bootstrap/images/tour012.png", date: "2025-06-03",link: "Shri-Shani-Shingnapur.php" },
          { name: "Goa", price: 11500 , days: "(5 Days / 4 Night)", rating: 5, image: "bootstrap/images/tour013.png", date: "2025-06-03",link: "Goa-details.php" },
          { name: "Omkareshwar - Indore - Ujjain ", price: 11500 , days: "Every Friday (5 Days / 4 Night)", rating: 5, image: "bootstrap/images/tour014.png", date: "2025-06-03",link: "Omkareshwar-details.php" },
          { name: "Pandharpur - Akkalkot - Tuljapur ", price: 4990 , days: "Every Saturday (2 Days / 1 Night)", rating: 5, image: "bootstrap/images/tour015.png", date: "2025-06-03",link: "Pandharpur-details.php" },
          { name: "Shimla - Kullu - Manali", price: 19990 , days: "Every Day (6 Days / 5 Night)", rating: 5, image: "bootstrap/images/tour016.png", date: "2025-06-03",link: "Shimla - Kullu.php" }



      ];
  
      function renderTours(list) {
          const container = document.getElementById("tour-list");
          if(container){
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
                  
                </div>
              </div>
                              <div class="text-center card-content-buttons"><a href="${tour.link}" class="search-button btn-slide">More Details</a></div>

            </div>`;
          });}
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
  
      sortTours("date");});


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
      function showTab(event, tabId) {
      document.querySelectorAll('.detail-tab').forEach(t => t.classList.remove('active'));
      document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
      event.target.classList.add('active');
      document.getElementById(tabId).classList.add('active');
    }

    document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      console.log("Observed:", entry.target);
      if (entry.isIntersecting) {
        console.log("Showing:", entry.target); 
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1
  });

  document.querySelectorAll('.fade-in-on-scroll').forEach(el => {
    observer.observe(el);
  });
});
window.addEventListener('DOMContentLoaded', () => {
      const bars = document.querySelectorAll('.review-progress-bar');

      setTimeout(() => {
        bars.forEach(bar => {
          const value = bar.getAttribute('data-value');
          bar.style.width = value + '%';
        });
      }, 100); 
    });

    // ----------
    const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
  const updateCount = () => {
    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText;

    const speed = 100; 
    const increment = Math.ceil(target / speed);

    if (count < target) {
      counter.innerText = count + increment;
      setTimeout(updateCount, 20);
    } else {
      counter.innerText = target;
    }
  };

  updateCount();
});
// Show button when page is scrolled
window.onscroll = function () {
    const btn = document.getElementById("backToTopBtn");
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      btn.style.display = "block";
    } else {
      btn.style.display = "none";
    }
  };

  // Scroll to top when button is clicked
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
  function toggleMenu(toggler) {
      toggler.classList.toggle('active');
      document.getElementById('navMenu').classList.toggle('show');
    }
    document.querySelectorAll('.custom-select').forEach(select => {
    const toggle = select.querySelector('.select-toggle');
    const options = select.querySelector('.select-options');
    const labelSpan = toggle.querySelector('span');

    toggle.addEventListener('click', () => {
      select.classList.toggle('open');
    });

    options.querySelectorAll('div').forEach(option => {
      option.addEventListener('click', () => {
        labelSpan.textContent = option.textContent;
        select.classList.remove('open');
      });
    });
  });

  document.addEventListener('click', (e) => {
    document.querySelectorAll('.custom-select').forEach(select => {
      if (!select.contains(e.target)) {
        select.classList.remove('open');
      }
    });
  });
  const range = document.getElementById("priceRange");
    const valueBox = document.getElementById("priceValue");
if(range){
    range.addEventListener("input", () => {
      valueBox.value = `₹${range.value}`;
    });}
    // -----
    const text = "Discover unforgettable destinations and turn your travel dreams into reality.";
  let i = 0;
  function type() {
    if (i < text.length) {
      document.getElementById("typingText").innerHTML += text.charAt(i);
      i++;
      setTimeout(type, 100);
    }
  }
  type();
  </script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  
  </body>
  
  </html>