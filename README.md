# **Rest Riser - Hotel Booking Platform**

## **Overview**

**Rest Riser** is a full-stack web application that offers a seamless hotel booking experience inspired by Booking.com. It allows users to browse rooms, check availability, contact the hotel, and manage their bookings through user and admin dashboards.

## **Features**

- **Room Browsing & Booking**: Explore room features, pricing, and guest capacity with a booking checker.  
- **Contact Form**: Secure form storing inquiries in MySQL.  
- **User Authentication**: Session-based login with profile management.  
- **Admin Dashboard**: Manage users, verify accounts, and more (except self-deletion).  
- **Responsive Design**: Built with Bootstrap for cross-device compatibility.  
- **Interactive Map**: Google Maps embedded for location.  
- **Social Media Integration**: Linkouts for better engagement.  
- **Facilities & Testimonials**: Display amenities and feedback.  
- **Occasion Booking**: Placeholder for event booking.

## **Technologies Used**

### **Frontend**
- HTML5, CSS3, JavaScript  
- Bootstrap 5 & Bootstrap Icons

### **Backend**
- PHP 7.x/8.x  
- MySQL

### **Database**
- MySQL with `users` and `userqueries` tables

### **APIs & Services**
- Google Maps Embed API

### **Session Management**
- PHP sessions

### **Security**
- Input sanitization: `htmlspecialchars`, `mysqli_real_escape_string`  
- Email validation: `filter_var`  
- Secure DB queries with prepared statements

## **Project Structure**

