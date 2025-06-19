# Rest Riser - Hotel Booking Platform

## Overview

Rest Riser is a full-stack web application designed to provide a seamless hotel booking experience, inspired by Booking.com. The platform allows users to browse available rooms, check booking availability, contact the hotel, and manage their accounts through a user-friendly interface. It includes both user and admin dashboards for managing bookings and user data, ensuring a robust and secure experience for all stakeholders.

---

## Features

- **Room Browsing & Booking:**  
  Users can explore available rooms with details such as features, facilities, pricing, and guest capacity. A booking availability checker allows users to input check-in/check-out dates and guest information.
- **Contact Form:**  
  A secure contact form enables users to send inquiries, with data stored in a MySQL database for easy management.
- **User Authentication:**  
  Secure session-based authentication allows users to log in, access their dashboard, and manage their profiles.
- **Admin Dashboard:**  
  Admins have access to a comprehensive dashboard to manage users, verify accounts, and delete users (except their own account).
- **Responsive Design:**  
  Built with Bootstrap, the platform is fully responsive, ensuring compatibility across desktops, tablets, and mobile devices.
- **Interactive Map:**  
  Embedded Google Maps for location visualization on the contact page.
- **Social Media Integration:**  
  Links to social media platforms for enhanced user engagement.
- **Facilities & Testimonials:**  
  Dedicated sections to showcase hotel facilities and customer testimonials, enhancing trust and user experience.
- **Occasion Booking:**  
  A placeholder for future implementation of special event or occasion booking functionality.

---

## Technologies Used

### Frontend

- HTML5, CSS3, JavaScript
- Bootstrap 5 for responsive design
- Bootstrap Icons for UI enhancements

### Backend

- PHP 7.x/8.x for server-side logic
- MySQL for database management

### Database

- MySQL with tables for users and user queries

### External APIs/Services

- Google Maps Embed API for location display

### Session Management

- PHP sessions for user authentication and state management

### Security

- Input sanitization using `htmlspecialchars` and `mysqli_real_escape_string`
- Email validation with `filter_var`
- Prepared statements for secure database queries

---

## Project Structure

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


---

## Database Schema

The application uses a MySQL database named `Hotelreservation` (or `booking_db` in some files). Key tables include:

### users

| Field       | Type         | Description                        |
|-------------|--------------|------------------------------------|
| id          | INT, PK      | Auto-increment primary key         |
| name        | VARCHAR      | User's full name                   |
| email       | VARCHAR      | User's email address               |
| role        | VARCHAR      | User role (admin or user)          |
| verified    | TINYINT      | Verification status (0 or 1)       |
| created_at  | TIMESTAMP    | Account creation timestamp         |
| last_login  | TIMESTAMP    | Last login timestamp               |

### userqueries

| Field   | Type      | Description               |
|---------|-----------|--------------------------|
| name    | VARCHAR   | Sender's name            |
| email   | VARCHAR   | Sender's email           |
| subject | TEXT      | Message content          |

> **Note:**  
> Ensure consistency in database names (`Hotelreservation` vs. `booking_db`) across all files before deployment.

---

## Setup Instructions

### Prerequisites

- Web server (e.g., Apache)
- PHP 7.x or 8.x
- MySQL 5.x or later
- Git (for cloning the repository)

### Installation

1. **Clone the Repository:**
    ```
    git clone https://github.com/your-username/rest-riser.git
    cd rest-riser
    ```

2. **Configure the Web Server:**
    - Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP).
    - Ensure the server supports PHP and MySQL.

3. **Set Up the Database:**
    - Create a MySQL database (e.g., `Hotelreservation`).
    - Import the necessary tables (create `users` and `userqueries` tables as per the schema above).
    - Update database credentials in `contactUs.php` and `dashboard.php`:
      ```
      $conn = new mysqli("localhost", "root", "", "Hotelreservation");
      ```
      Replace `"root"`, `""`, and `"Hotelreservation"` with your MySQL username, password, and database name.

4. **Run the Application:**
    - Start your web server and MySQL service.
    - Access the application via [http://localhost/rest-riser/index.php](http://localhost/rest-riser/index.php).

---

## Admin Access

- Create an admin user in the `users` table with `role = 'admin'`.
- Log in to access the admin dashboard at `dashboard.php?view=admin`.

---

## Usage

- **Homepage:** Browse rooms, check availability, and navigate to other sections.
- **Rooms:** Filter rooms by availability, facilities, and guest count.
- **Contact Us:** Submit inquiries via the contact form.
- **Dashboard:**
  - **Users:** View and manage personal account details.
  - **Admins:** Manage all users, verify accounts, and delete users.
- **Facilities & About:** Learn about the hotel's amenities and background.
- **Occasion Booking:** Currently a placeholder for future development.

---

## Known Issues

- Inconsistent database names (`Hotelreservation` vs. `booking_db`) may cause connection errors.
- The `Ocassion.php` file is empty and requires implementation.
- The `testoo.php` file is referenced but not provided; it may be a placeholder or missing.
- Limited booking functionality; actual booking processing logic is not fully implemented.
- Social media links in `contactUs.php` are placeholders (`href="#"`).

---

## Future Enhancements

- Implement full booking functionality with payment integration.
- Complete the occasion booking feature in `Ocassion.php`.
- Add user registration and password recovery features.
- Enhance security with password hashing and CSRF protection.
- Optimize database queries for better performance.
- Expand testimonial and facility sections with dynamic content from the database.

---

## Contributing

Contributions are welcome! To contribute:

1. Fork the repository.
2. Create a new branch:
    ```
    git checkout -b feature/your-feature
    ```
3. Commit your changes:
    ```
    git commit -am 'Add your feature'
    ```
4. Push to the branch:
    ```
    git push origin feature/your-feature
    ```
5. Open a pull request.

Please ensure your code follows the project's coding standards and includes appropriate documentation.

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## Contact

For questions or support, please contact:

- **Email:** Reservation@restriser.com
- **GitHub Issues:** [Submit an issue](../../issues)

---

Thank you for exploring Rest Riser! We hope you enjoy using this platform as much as we enjoyed building it.
