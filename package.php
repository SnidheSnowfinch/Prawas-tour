<?php include 'includes/header.php' ?>
<div class="container-div">


  <div class="container-tab">
    
    <div>
    <div class="tabs">
    <button class="tab-btn active" data-sort="date">📅 Date</button>
    <button class="tab-btn" data-sort="low">⬆️ Price Low to High</button>
    <button class="tab-btn" data-sort="high">⬇️ Price High to Low</button>
    <button class="tab-btn" data-sort="name">🔤 Name</button>
 
    </div>
    <div class="main-content" id="tour-list">
   
    </div>
    </div>

    <div class="right-filters">
      <h3>Finds Your Destination</h3>
      <p>Discover the World</p>
      <input type="text" placeholder="Search Tour">
      <input type="text" placeholder="Destination">
      <input type="month">

      <label>Price Range</label>
      <input type="range" min="1000" max="25000" step="500" value="7500">

      <span><input type="checkbox"> Recommended</span>
      <label><input type="checkbox"> Budget Friendly</label>
      <label><input type="checkbox"> Beaches</label>
      <label><input type="checkbox"> Romantic</label>
      <label><input type="checkbox"> Group Tours</label>

      <button class="search-button">SEARCH</button>
    </div>
  </div></div>

  <script>
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
  </script>

</body>
</html>