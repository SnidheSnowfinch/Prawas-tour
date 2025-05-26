<?php include 'includes/header.php' ?>
<div class="header-package">
    <div class="header-overlay">
        <h1>package listing</h1>
        <p>Home / Package</p>
    </div>
</div>
<div class="container-div">


    <div class="container-tab">

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
    <p class="container-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae
        condimentum egestas, libero dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretium.
    </p>
    <div class="cardtTabs">
        <div class="cardtTab active" onclick="showcardtTab('all')">ALL</div>
        <div class="cardtTab" onclick="showcardtTab('budget')">BUDGET FRIENDLY</div>
        <div class="cardtTab" onclick="showcardtTab('escorted')">ESCORTED TOURS</div>
        <div class="cardtTab" onclick="showcardtTab('recommended')">RECOMMENDED</div>
    </div>
    <div class="carousel-container">
        <button class="nav-btn prev-btn" onclick="scrollCardsDest(-1)">❮</button>
        <div id="all" class="cardtTab-content active">

            <div class="tour-cards" id="DestContainer">
                <!-- Repeatable Card -->
                <div class="card">
                    <img src="bootstrap/images/tour-img-1.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>


                    </div>
                </div>

                <div class="card">
                    <img src="bootstrap/images/tour-img-2.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>


                    </div>
                </div>

                <div class="card">
                    <img src="bootstrap/images/tour-img-3.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>


                    </div>
                </div>
                <div class="card">
                    <img src="bootstrap/images/tour-img-1.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>

                    </div>
                </div>

                <!-- Add more cards here if needed -->
            </div>
        </div>
        <div id="budget" class="cardtTab-content">
            <div class="tour-cards" id="DestContainer">
                <!-- Repeatable Card -->


                <div class="card">
                    <img src="bootstrap/images/tour-img-2.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>


                    </div>
                </div>

                <div class="card">
                    <img src="bootstrap/images/tour-img-3.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>


                    </div>
                </div>
                <div class="card">
                    <img src="bootstrap/images/tour-img-1.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <img src="bootstrap/images/tour-img-3.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>


                    </div>
                </div>
                <!-- Add more cards here if needed -->
            </div>
        </div>
        <div id="escorted" class="cardtTab-content">
            <div class="tour-cards" id="DestContainer">
                <div class="card">
                    <img src="bootstrap/images/tour-img-1.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <img src="bootstrap/images/tour-img-3.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>


                    </div>
                </div>
                <div class="card">
                    <img src="bootstrap/images/tour-img-2.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>


                    </div>
                </div>

                <div class="card">
                    <img src="bootstrap/images/tour-img-3.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div id="recommended" class="cardtTab-content">
            <div class="tour-cards" id="DestContainer">

                <div class="card">
                    <img src="bootstrap/images/tour-img-3.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>


                    </div>
                </div>
                <div class="card">
                    <img src="bootstrap/images/tour-img-1.png" />
                    <div class="card-content">
                        <div class="d-card-flex">
                            <h3>Diveagar – Dapoli – Kelshi</h3>
                            <h3 class="price">₹ 7500</h3>
                        </div>
                        <p>6.3 Good</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus…</p>
                        <div class="d-card-flex">
                            <p>Every Friday (3 Days / 2 Night)</p>
                            <p>2 Adults</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <button class="nav-btn next-btn" onclick="scrollCardsDest(1)">❯</button>
    </div>


    <p class="container-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis laboriosam porro sequi
        provident quae, accusamus ea voluptates eligendi dolorem cumque iusto qui quod odio voluptas aliquam adipisci,
        est vitae. Enim!</p>
    <div class="text-center"> <button class="container-button">Book</button>
    </div>
</section>


<?php include 'includes/footer.php' ?>

