<?php include 'includes/header.php' ?>
<div class="header-detail">
    <img src="bootstrap/images/Rental/booking-home.jpg" alt="">
    <div class="header-overlay-detail">
        <h1>

        Vehicle Booking</h1>
        
    </div>
</div>
<div class="container-div container-div-large">
<div class="form-container">
    <h2>Booking Form</h2>
    <form>
      <label>Name <span class="required">*</span></label>
      <div class="name-row">
        <input type="text" placeholder="First" required />
        <input type="text" placeholder="Last" required />
      </div>

      <label>Email <span class="required">*</span></label>
      <input type="email" placeholder="Enter your email" required />

      <label>Contact Number <span class="required">*</span></label>
      <input type="text" placeholder="Enter your contact number" required />

      <label>Select Vehicle <span class="required">*</span></label>
      <select required>
        <option value="">Select Vehicle here</option>
        <option value="car">Car</option>
        <option value="van">Van</option>
        <option value="bus">Bus</option>
      </select>

      <label>Vehicle Type <span class="required">*</span></label>
      <select required>
        <option value="">Select Vehicle Type here</option>
        <option value="economy">Economy</option>
        <option value="luxury">Luxury</option>
        <option value="suv">SUV</option>
      </select>

      <label>Destination From <span class="required">*</span></label>
      <input type="text" placeholder="Enter pickup location" required />

      <label>Destination To <span class="required">*</span></label>
      <input type="text" placeholder="Enter drop-off location" required />

      <label>Tour Date </label>
      <input type="text" placeholder="Enter Tour Date" required />

      <label>No. of persons<span class="required">*</span></label>
      <input type="text" placeholder="Number of persons" required />

      <button class="container-button w-100" type="submit">Book Now</button>
    </form>
  </div>
</div>