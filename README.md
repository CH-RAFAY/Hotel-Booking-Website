# **Rest Riser - Hotel Booking Platform**

## **Overview**

**Rest Riser** is a full-stack web application designed to provide a seamless hotel booking experience, inspired by Booking.com. The platform allows users to browse available rooms, check booking availability, contact the hotel, and manage their accounts through a user-friendly interface. It includes both user and admin dashboards for managing bookings and user data, ensuring a robust and secure experience for all stakeholders.

## **Features**

- **Room Browsing & Booking**: Users can explore available rooms with details such as features, facilities, pricing, and guest capacity. A booking availability checker allows users to input check-in/check-out dates and guest information.  
- **Contact Form**: A secure contact form enables users to send inquiries, with data stored in a MySQL database for easy management.  
- **User Authentication**: Secure session-based authentication allows users to log in, access their dashboard, and manage their profiles.  
- **Admin Dashboard**: Admins have access to a comprehensive dashboard to manage users, verify accounts, and delete users (except their own account).  
- **Responsive Design**: Built with Bootstrap, the platform is fully responsive, ensuring compatibility across desktops, tablets, and mobile devices.  
- **Interactive Map**: Embedded Google Maps for location visualization on the contact page.  
- **Social Media Integration**: Links to social media platforms for enhanced user engagement.  
- **Facilities & Testimonials**: Dedicated sections to showcase hotel facilities and customer testimonials, enhancing trust and user experience.  
- **Occasion Booking**: A placeholder for future implementation of special event or occasion booking functionality.

## **Technologies Used**

### **Frontend**
- HTML5, CSS3, JavaScript  
- Bootstrap 5 for responsive design  
- Bootstrap Icons for UI enhancements

### **Backend**
- PHP 7.x/8.x for server-side logic  
- MySQL for database management

### **Database**
- MySQL with tables for `users` and `userqueries`

### **External APIs/Services**
- Google Maps Embed API for location display

### **Session Management**
- PHP sessions for user authentication and state management

### **Security**
- Input sanitization using `htmlspecialchars` and `mysqli_real_escape_string`  
- Email validation with `filter_var`  
- Prepared statements for secure database queries

## **Project Structure**

rest-riser/
├── about.php # About page with hotel information
├── contactUs.php # Contact page with form and map
├── dashboard.php # User and admin dashboards
├── Facilities.php # Facilities page showcasing amenities
├── index.php # Homepage with room previews and booking checker
├── Ocassion.php # Placeholder for occasion booking
├── Rooms.php # Rooms page with filtering and booking options
├── testoo.php # Referenced in dashboard (possibly a placeholder or redirect)
├── inc/
│ ├── header.php # Common header for navigation
│ ├── footer.php # Common footer
│ ├── link.php # Common CSS/JS includes
└── README.md # Project documentation


## **Database Schema**

The application uses a MySQL database named `Hotelreservation` (or `booking_db` in some files). Key tables include:

### `users`
- `id`: Primary key, auto-increment  
- `name`: User's full name  
- `email`: User's email address  
- `role`: User role (`admin` or `user`)  
- `verified`: Verification status (`0` or `1`)  
- `created_at`: Account creation timestamp  
- `last_login`: Last login timestamp  

### `userqueries`
- `name`: Sender's name  
- `email`: Sender's email  
- `subject`: Message content  

**Note**: Ensure consistency in database names (`Hotelreservation` vs. `booking_db`) across all files before deployment.

## **Setup Instructions**

### **Prerequisites**
- Web server (e.g., Apache)  
- PHP 7.x or 8.x  
- MySQL 5.x or later  
- Git (for cloning the repository)

### **Installation**

**Clone the Repository:**
```bash
git clone https://github.com/your-username/rest-riser.git
cd rest-riser

