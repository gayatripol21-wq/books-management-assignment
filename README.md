# Books Management System – WordPress Assignment

## About the Project

This project was developed as part of a WordPress technical assignment. The objective was to create a simple system for managing and displaying books while restricting access to authenticated users.

The solution includes a custom post type for books, custom fields for storing book information, access control for both individual book pages and the books listing page, a custom shortcode with pagination, and a responsive frontend layout.

The focus of this project was on functionality, clean implementation, and adherence to WordPress best practices.

---

## About No Code Structure Builder

For creating the Books Custom Post Type, I used a WordPress plugin developed by me called **No Code Structure Builder**.

The plugin provides a visual interface for creating WordPress content structures such as Custom Post Types and helps reduce repetitive setup work during development.

For this assignment, the plugin was used only for generating the Books Custom Post Type. All assignment-specific functionality, including custom fields integration, login-based access restriction, custom templates, shortcode implementation, pagination, and frontend customization, was developed separately using custom WordPress code, WordPress hooks, and APIs.

---

## Features Implemented

### Custom Post Type – Books

A Custom Post Type called **Books** was created to manage book entries separately from standard WordPress posts.

Each book contains the following information:

* Title
* Author
* Genre
* Published Date
* Description

Custom fields were implemented using Advanced Custom Fields (ACF).

---

### Access Restriction

Access to book content is restricted to logged-in users only.

The following pages are protected:

* Individual Book Pages
* Books Listing Page

If a guest user attempts to access restricted content, the following message is displayed:

> You must be logged in to view this content. Please log in or register.

This functionality was implemented using WordPress authentication checks and the `template_redirect` hook.

---

### Single Book Page

A custom template was created to display complete book information, including:

* Book Title
* Author
* Genre
* Published Date
* Description

The layout was kept simple and readable while ensuring compatibility across devices.

---

### Books Listing Page

A custom shortcode was developed:

`[books_list]`

The shortcode displays:

* Book Title (linked to the single book page)
* Author
* Genre

Pagination has been implemented with a limit of **5 books per page**.

---

### Responsive Design

Basic responsive styling was added to ensure the content remains readable and user-friendly on:

* Desktop devices
* Tablets
* Mobile devices

---

## Technologies Used

* WordPress
* PHP
* Advanced Custom Fields (ACF)
* WordPress Hooks & Filters
* WP_Query
* Shortcodes
* HTML
* CSS

---

## Project Structure

```text
README.md

books-assignment/
└── books-assignment.php

custom-template/
└── single-book.php

screenshots/
├── books-listing.png
├── single-book.png
└── login-restriction.png
```

---

## Installation & Testing

### Setup

1. Install WordPress.
2. Install and activate Advanced Custom Fields (ACF).
3. Upload the assignment files to the WordPress installation.
4. Activate the Books Assignment plugin.
5. Create the required ACF fields:

   * Author
   * Genre
   * Published Date
6. Create and publish sample book entries.
7. Create a page and add the shortcode:

```text
[books_list]
```

---

### Testing the Solution

#### Books Listing Page

Visit the Books Listing page and verify:

* Books are displayed correctly.
* Title links open individual book pages.
* Pagination works correctly after 5 books.

#### Single Book Page

Open any book and verify that:

* Title is displayed.
* Author is displayed.
* Genre is displayed.
* Published Date is displayed.
* Description is displayed.

#### Access Restriction

1. Log out of WordPress.
2. Attempt to access:

   * A single book page
   * The books listing page
3. Verify that access is blocked and the login message is displayed.

---

## Screenshots

The repository includes screenshots demonstrating:

* Books Listing Page
* Single Book Page
* Login Restriction Message

---

## Live Demo

### Books Listing Page

https://floralwhite-goat-242089.hostingersite.com/books-list/

### Sample Book Page

https://floralwhite-goat-242089.hostingersite.com/book/atomic-habits/

---

Thank you for taking the time to review my submission. I enjoyed working on this assignment and building the solution using WordPress best practices while keeping the implementation simple, functional, and easy to extend.
