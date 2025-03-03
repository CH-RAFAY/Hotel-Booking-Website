<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Details - Booking.com</title>
    <?php require('inc/link.php');?>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        
        :root {
            --booking-blue: #003580;
            --booking-light-blue: #0071c2;
            --booking-yellow: #febb02;
            --booking-green: #008009;
            --booking-red: #e21111;
            --booking-gray: #f5f5f5;
            --booking-dark-gray: #333333;
            --booking-border: #e7e7e7;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            color: #333;
            background-color: #f5f5f5;
        }


        .hotel-name {
            margin-top: 5%;
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .hotel-address {
            font-size: 0.9rem;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .hotel-rating {
            background-color: var(--booking-blue);
            color: white;
            padding: 0.2rem 0.5rem;
            border-radius: 5px;
            font-weight: bold;
        }
        
        .star-rating {
            color: var(--booking-yellow);
            margin-right: 0.5rem;
        }
        
        .room-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 1rem 0;
        }
        
        .room-gallery img {
            border-radius: 5px;
            margin-bottom: 0.5rem;
            width: 100%;
            height: 350px;
            object-fit: cover;
        }
        
        .small-gallery img {
            height: 111px;
            object-fit: cover;
        }
        
        .room-features {
            background-color: white;
            border-radius: 5px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-bottom: 1rem;
        }
        
        .room-features h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--booking-dark-gray);
        }
        
        .feature-item {
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }
        
        .feature-item i {
            color: var(--booking-green);
            margin-right: 0.5rem;
        }
        
        .booking-sidebar {
            background-color: white;
            border-radius: 5px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            position: sticky;
            top: 20px;
        }
        
        .price-section {
            margin-bottom: 1.5rem;
        }
        
        
        .current-price {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--booking-dark-gray);
        }
        
        .per-night {
            font-size: 0.9rem;
            color: #666;
        }
        
        .tax-info {
            font-size: 0.8rem;
            color: #666;
            margin-bottom: 1rem;
        }
        
        .deal-badge {
            background-color: var(--booking-red);
            color: white;
            font-size: 0.85rem;
            padding: 0.25rem 0.75rem;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 1rem;
        }
        
        .room-option {
            border: 1px solid var(--booking-border);
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 1rem;
            background-color: #f9f9f9;
        }
        
        .option-name {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .booking-btn {
            background-color: var(--booking-green);
            color: white;
            font-weight: 600;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            width: 100%;
            margin-top: 1rem;
        }
        
        .booking-btn:hover {
            background-color: #006106;
            color: white;
        }
        
        .free-cancellation {
            color: var(--booking-green);
            font-weight: 600;
            font-size: 0.9rem;
            margin-top: 1rem;
        }
        
        .sold-out-badge {
            background-color: var(--booking-red);
            color: white;
            font-size: 0.85rem;
            padding: 0.25rem 0.75rem;
            border-radius: 5px;
            display: inline-block;
        }
        
        .room-policies {
            font-size: 0.85rem;
            color: #666;
            margin-top: 1.5rem;
        }
        
        .availability-calendar {
            background-color: white;
            border-radius: 5px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-top: 1rem;
        }
        
        .map-section {
            background-color: white;
            border-radius: 5px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-top: 1rem;
            
        }

        
        .badge-genius  {
            background-color: #F9E9F7;
            color: #6B1A65;
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 3px;
            margin-left: 0.5rem;
        }
        
        .usp-point {
            display: flex;
            align-items: start;
            margin-bottom: 0.75rem;
        }
        
        .usp-point i {
            color: var(--booking-green);
            margin-right: 0.5rem;
            font-size: 1rem;
            margin-top: 0.2rem;
        }
        
        .badge-exclusive {
            background-color: var(--booking-blue);
            color: white;
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 3px;
        }
    </style>
</head>



<body>
    <!-- Navbar -->
    <?php require('inc/header.php');?>
    
    
    <!-- Main Content -->
    <div class="container mt-4">
        
        <!-- Hotel Header -->
        <div class="row mb-4">
            <div class="col-md-8">
                <h1 class="hotel-name">Grand Plaza Hotel <span class="star-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span></h1>
                <p class="hotel-address"><i class="fas fa-map-marker-alt me-2"></i>123 Fifth Avenue, New York, 10001, United States</p>
            </div>
            <div class="col-md-4 text-md-end">
                <span class="hotel-rating">9.2</span>
                <span class="ms-2 fw-bold">Excellent</span>
            </div>
        </div>
        
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <h2 class="room-title">Deluxe King Room <span class="badge-exclusive">Exclusive deal</span></h2>
                
                <!-- Room Gallery -->
                <div class="room-gallery mb-4">
                    <div class="row">
                        <div class="col-md-8">
                            <img src="room imgs\pexels-marywhitneyph-90319.jpg" alt="Room Main Image" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                            <div class="small-gallery d-flex flex-column h-100">
                                <img src="room imgs\pexels-marywhitneyph-90319.jpg" alt="Room Detail 1" class="img-fluid mb-2">
                                <img src="room imgs\pexels-marywhitneyph-90319.jpg" alt="Room Detail 2" class="img-fluid mb-2">
                                <div class="position-relative">
                                    <img src="room imgs\pexels-marywhitneyph-90319.jpg" alt="Room Detail 3" class="img-fluid">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Room Features -->
                <div class="room-features">
                    <h3>Room features</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item"><i class="fas fa-ruler-combined"></i> 35 m²</div>
                            <div class="feature-item"><i class="fas fa-eye"></i> City view</div>
                            <div class="feature-item"><i class="fas fa-bed"></i> 1 king bed</div>
                            <div class="feature-item"><i class="fas fa-shower"></i> Private bathroom</div>
                            <div class="feature-item"><i class="fas fa-tv"></i> Flat-screen TV</div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item"><i class="fas fa-wifi"></i> Free WiFi</div>
                            <div class="feature-item"><i class="fas fa-snowflake"></i> Air conditioning</div>
                            <div class="feature-item"><i class="fas fa-coffee"></i> Coffee machine</div>
                            <div class="feature-item"><i class="fas fa-concierge-bell"></i> Room service</div>
                            <div class="feature-item"><i class="fas fa-utensils"></i> Minibar</div>
                        </div>
                    </div>
                    
                    <hr>
                    
                    <h3>Room information</h3>
                    <p>Our spacious Deluxe King Room offers elegant decor, premium amenities, and stunning city views. Perfect for both business and leisure travelers seeking comfort and luxury.</p>
                    
                    <div class="mt-3">
                        <div class="usp-point">
                            <i class="fas fa-check-circle"></i>
                            <div>Spacious 35 m² room with king-size bed and premium linens</div>
                        </div>
                        <div class="usp-point">
                            <i class="fas fa-check-circle"></i>
                            <div>Marble bathroom with rain shower, bathtub, and luxury toiletries</div>
                        </div>
                        <div class="usp-point">
                            <i class="fas fa-check-circle"></i>
                            <div>Work desk with ergonomic chair and high-speed WiFi</div>
                        </div>
                        <div class="usp-point">
                            <i class="fas fa-check-circle"></i>
                            <div>Smart TV with streaming services and international channels</div>
                        </div>
                        <div class="usp-point">
                            <i class="fas fa-check-circle"></i>
                            <div>In-room coffee machine with complimentary premium coffee selection</div>
                        </div>
                    </div>
                </div>
                
                <!-- Room Availability Calendar -->
                <div class="availability-calendar">
                    <h3>Check availability</h3>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label class="form-label">Check-in date</label>
                                <input type="date" class="form-control" value="2025-03-15">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label class="form-label">Check-out date</label>
                                <input type="date" class="form-control" value="2025-03-18">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label">Rooms</label>
                                <select class="form-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="btn booking-btn mt-2">Check Availability</button>
                </div>
                
                <!-- Map Section -->
                <div class="map-section">
                    <h3>Location</h3>
                    <div class="position-relative">
                        <img src="room imgs\maps.png" alt="Map" class="img-fluid rounded">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i class="fas fa-map-marker-alt text-danger fa-2x"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p><i class="fas fa-map-marker-alt text-danger me-2"></i>123 Fifth Avenue, New York, 10001</p>
                        <p class="mb-0"><i class="fas fa-info-circle me-2"></i>Great location - show map</p>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="booking-sidebar">
                    <div class="price-section">
                        <div class="current-price">$279 <span class="per-night">per night</span></div>
                        <div class="tax-info">+$41 taxes and charges</div>
                        <div class="deal-badge">30% OFF TODAY</div>
                    </div>
                    
                    <div class="room-option">
                        <div class="d-flex justify-content-between">
                            <div class="option-name">Room only</div>
                            <div class="fw-bold">$279</div>
                        </div>
                        <div class="text-muted small">No meals included</div>
                    </div>
                    
                    <div class="room-option">
                        <div class="d-flex justify-content-between">
                            <div class="option-name">Room with breakfast</div>
                            <div class="fw-bold">$309</div>
                        </div>
                        <div class="text-muted small">Breakfast included</div>
                    </div>
                    
                    <div class="room-option">
                        <div class="d-flex justify-content-between">
                            <div class="option-name">Half board</div>
                            <div><span class="sold-out-badge">Sold out</span></div>
                        </div>
                        <div class="text-muted small">Breakfast and dinner included</div>
                    </div>
                    
                    <button class="booking-btn">I'll reserve</button>
                    
                    <div class="free-cancellation mt-3">
                        <i class="fas fa-check-circle me-2"></i>Free cancellation before March 12
                    </div>
                    
                    <div class="mt-3">
                        <div class="usp-point">
                            <i class="fas fa-check-circle"></i>
                            <div>No prepayment needed - pay at the property</div>
                        </div>
                        <div class="usp-point">
                            <i class="fas fa-check-circle"></i>
                            <div>Only 3 rooms left at this price on our site</div>
                        </div>
                        <div class="usp-point">
                            <i class="fas fa-check-circle"></i>
                            <div>Genius discount <span class="badge-genius">Level 2</span></div>
                        </div>
                    </div>
                    
                    <div class="room-policies">
                        <p class="mb-1"><i class="fas fa-user me-2"></i>Max: 2 adults</p>
                        <p class="mb-1"><i class="fas fa-smoking-ban me-2"></i>Non-smoking room</p>
                        <p class="mb-1"><i class="fas fa-credit-card me-2"></i>Accepts major credit cards</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php require('inc/footer.php');?>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>