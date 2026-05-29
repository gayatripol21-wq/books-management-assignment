Books Management System – WordPress Assignment

About the Project

This project is a simple Books Management System built in WordPress as part of an assignment.

The goal was to create a custom post type called Books, store book-related information, restrict access to logged-in users, and display the content on the frontend using custom templates and shortcodes.

The project was developed using WordPress, Advanced Custom Fields (ACF), custom PHP, WordPress hooks, and responsive CSS.

Features Implemented

Custom Post Type

A custom post type called Books was created.

Each book contains:

Title
Author
Genre
Published Date
Description
Access Restriction

Book content is only accessible to logged-in users.

If a guest user tries to access a book page or books listing page, they see the following message:

You must be logged in to view this content. Please log in or register.

This functionality was implemented using WordPress authentication checks and hooks.

Single Book Page

A custom template was created to display:

Book Title
Author
Genre
Published Date
Description
Books Listing Page

A custom shortcode was created:

[books_list]

The shortcode displays:

Book Title (linked to the book page)
Author
Genre

Pagination has also been implemented with a limit of 5 books per page.

Responsive Design

Basic responsive styling was added to ensure the pages remain readable and usable on desktop, tablet, and mobile devices.

Development Approach

For creating the Books Custom Post Type, I used my own WordPress plugin called No Code Structure Builder.

The plugin helps generate WordPress content structures through a visual interface.

All assignment-specific functionality was developed separately using custom WordPress code, including:

Login restriction
Custom single book template
Books listing shortcode
Pagination
Frontend styling
WordPress hooks and APIs
Technologies Used
WordPress
PHP
Advanced Custom Fields (ACF)
WordPress Hooks
WP_Query
Shortcodes
HTML
CSS
Live Demo

Books Listing Page:

https://floralwhite-goat-242089.hostingersite.com/books-list/

Sample Book Page:

https://floralwhite-goat-242089.hostingersite.com/book/atomic-habits/
