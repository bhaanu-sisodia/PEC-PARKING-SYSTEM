Software Requirements Specification (SRS)
Project Title: PEC Parking Management System
________________________________________
1. Introduction
1.1 Purpose
The PEC Parking Management System is designed to manage vehicle entry and exit within a parking lot in real time. It allows operators to log vehicle arrivals, process exits with automatic fee calculation, and view daily usage analytics including revenue reports.
1.2 Scope
This system supports:
•	Logging vehicle entries and exits.
•	Calculating parking fees based on duration.
•	Updating vehicle information before exit.
•	Viewing daily parking analytics (entries, revenue, average fees).
•	Managing parking data through a web-based interface.
1.3 Definitions
Term	Description
SRS	Software Requirements Specification
PHP	Server-side scripting language
MySQL	Relational Database Management System
Fee	Parking charge calculated on duration
________________________________________
2. Overall Description
2.1 Product Perspective
This is a standalone web application that runs on a LAMP stack (Linux, Apache, MySQL, PHP). It interacts with a single MySQL database to track all vehicle activity.
2.2 User Classes and Characteristics
User Type	Role
Parking Staff	Enters and exits vehicles, updates plate info
Admin	Views analytics, export reports (future scope)
2.3 Operating Environment
•	Frontend: HTML, CSS (basic styling)
•	Backend: PHP 7.x or higher
•	Database: MySQL 5.7+
•	Web Server: Apache/Nginx
•	Browser: Chrome, Firefox, Edge
________________________________________
3. System Features
3.1 Vehicle Entry
•	Users input the license plate of a vehicle entering the lot.
•	System records the current timestamp (entry_time) and stores it in the database.
3.2 Vehicle Exit
•	User clicks “Exit” button for a parked vehicle.
•	System calculates duration and fee:
o	Fee = ₹20 per hour (minimum ₹20).
•	Stores exit_time and calculated fee.
3.3 Vehicle Update (Edit Feature)
•	Before exit, users can update the license plate.
•	A simple form allows editing and updating the record.
3.4 Current Vehicle Status
•	Lists all vehicles currently inside the parking lot.
3.5 Exit History
•	Shows recent 20 exited vehicles with:
o	Plate number
o	Entry time
o	Exit time
o	Parking fee
3.6 Daily Analytics
•	Shows parking data for the last 30 days:
o	Total entries
o	Total revenue
o	Average fee per day
________________________________________
4. Non-Functional Requirements
4.1 Performance
•	Should respond to entry/exit actions in under 2 seconds.
•	Handles up to 500 active parking entries.
4.2 Security
•	No login required in version 1.0.
•	Future versions should implement user authentication and input validation.
4.3 Maintainability
•	Code is modular: config.php, index.php.
•	Easy to extend (add slots, export, graphs).
________________________________________
5. Data Design
5.1 Database: vehicles
Field	Type	Description
id	INT, PK, AI	Unique vehicle ID
plate	VARCHAR(20)	Vehicle license plate
entry_time	DATETIME	Time of entry
exit_time	DATETIME (null)	Time of exit
fee	DECIMAL(10,2)	Parking fee (nullable)
________________________________________
6. User Interface Mockup
Home Page Sections:
•	Vehicle Entry Form
•	Currently Parked Vehicles
o	With Update + Exit buttons
•	Recent Exit History
•	Daily Analytics Table
________________________________________
7. Assumptions and Dependencies
•	Vehicle plate numbers are manually entered (no cameras or OCR).
•	Parking fees are calculated hourly.
•	System runs on a single machine or local network.
•	Admin analytics are only visible in the browser; no export in v1.0.
________________________________________
8. Future Enhancements
•	User login system (Admin/Operator)
•	CSV or PDF report export
•	QR code vehicle tickets
•	Mobile/responsive design
•	Slot capacity and real-time availability
•	Graphs/charts using Chart.js or Google Charts
________________________________________

