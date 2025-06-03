<?php include 'includes/header.php' ?>
<div class="header-package">
    <div class="header-overlay">
        <h1>package listing</h1>
        <p>Home / Package</p>
    </div>
</div>
<div class="container-div-large">


    <div class="container-tab-new">

        <div>
            <div class="tabs">
                <button class="tab-btn active" data-sort="date"><i class="bi bi-calendar"></i>
                Date</button>
                <button class="tab-btn" data-sort="low"><i class="bi bi-arrow-up"></i> Price Low to High</button>
                <button class="tab-btn" data-sort="high"><i class="bi bi-arrow-down"></i> Price High to Low</button>
                <button class="tab-btn" data-sort="name"><i class="bi bi-alphabet"></i> 
                Name</button>

            </div>
            <div class="main-content" id="tour-list">

            </div>
        </div>
<div>
        <div class="right-filters">
            <h3>Finds Your Destination</h3>
            <p>Discover the World</p>
            <input type="text" placeholder="Search Tour">
            <input type="text" placeholder="Destination">
            <input type="month">

            <label>Price Range</label>
            <input type="range" min="1000" max="25000" step="500" value="7500">
            <div class="form-check d-flex mt-2">
                                <input class="form-check-input" required type="checkbox" id="checkbox1">
                                <label class="form-check-label mx-2" for="checkbox1">recommended</label>
                            </div>
                            <div class="form-check d-flex mt-2">
                                <input class="form-check-input" required type="checkbox" id="checkbox1">
                                <label class="form-check-label mx-2" for="checkbox1">Budget Friendly</label>
                            </div>
                            <div class="form-check d-flex mt-2">
                                <input class="form-check-input" required type="checkbox" id="checkbox1">
                                <label class="form-check-label mx-2" for="checkbox1">Beaches</label>
                            </div>
                            <div class="form-check d-flex mt-2">
                                <input class="form-check-input" required type="checkbox" id="checkbox1">
                                <label class="form-check-label mx-2" for="checkbox1">Romantic</label>
                            </div>
                            <div class="form-check d-flex mt-2">
                                <input class="form-check-input" required type="checkbox" id="checkbox1">
                                <label class="form-check-label mx-2" for="checkbox1">Group Tours</label>
                                </label>
                            </div>

                            

            <button class="search-button">SEARCH</button>
        </div>
        <div class="news-div">
          <h3>Newsletter</h3>
          <p>Loreempore dolores possimus in recusandae?</p>
          <input type="email" placeholder="Email">
          <button class="search-button">SEARCH</button>


        </div>
    </div>
    </div>
</div>
<section class="container-div gray-div fade-in-on-scroll">
    <h2>Popular Destinations</h2>
    <p class="container-p">Discover the world's most popular destinations, where culture, adventure, and breathtaking beauty come together to create unforgettable memories.
    </p>
  
    <div class="carousel-container">
        <button class="nav-btn-popular prev-btn" onclick="scrollCardsDest(-1)">❮</button>
        <div  class="cardtTab-content">

            <div class="tour-cards DestContainer">
                <!-- Repeatable Card -->
                <div class="card-popular">
                <img src="bootstrap/images/tour01.png" />                    <div class="card-content-popular">
                       
                <h3>Ashtavinayak Darshan</h3>
                
                      
                       


                    </div>
                </div>

                <div class="card-popular">
                <img src="bootstrap/images/tour04.png" />
                    <div class="card-content-popular">
                       
                    <h3>Aurangabad - Ajanta - Ellora</h3>
                                        
                       


                    </div>
                </div>

                <div class="card-popular">
                <img src="bootstrap/images/tour07.png" />
                    <div class="card-content-popular">
                       
                    <h3>Mahabaleshwar – Pratapgad</h3>
                                     
                       


                    </div>
                </div>
                <div class="card-popular">
                <img src="bootstrap/images/tour05.png" />
                    <div class="card-content-popular">
                       
                    <h3>Diveagar – Dapoli - Kelshi</h3>
                                         
                       


                    </div>
               
                </div>

            </div>
        </div>
      
  

        <button class="nav-btn-popular next-btn" onclick="scrollCardsDest(1)">❯</button>
    </div>



    </div>
</section>

<?php include 'includes/footer.php' ?>

