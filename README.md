# OpenStreetMap
web-based mapping application using open street
Preview Web APP: 
![image](https://github.com/user-attachments/assets/1da1d1cb-f90c-4310-8f8b-d828b3b37f89)

The purpose of the project you're working on is to create a web-based mapping application that allows users to:

    Add location pins:

        Users can click on the map to add a pin representing a specific location (latitude and longitude).

    Display stored pins:

        Pins that were previously saved to the database are displayed on the map, so users can see all the locations that have been added.

    Delete pins:

        Users can remove pins from the map, which also deletes them from the database.

    Track and store user's current location:

        The app can automatically get the user's current geographic location (latitude and longitude) using the browser's Geolocation API and store this information in the database.

Key Features of the Project:

    Interactive Map: The application uses OpenStreetMap with Leaflet.js to render the map and interact with it.

    Backend with PHP & MySQL:

        The pins are stored and retrieved from a MySQL database.

        The project uses PDO (PHP Data Objects) for secure database interactions.

        The PHP scripts handle adding, retrieving, and deleting pins from the database.

    User-friendly: The user can add, view, and remove location pins interactively, with each pin corresponding to a specific set of coordinates.

    Real-time Interaction: When a pin is added or deleted, the map updates dynamically.

Real-World Application:

This type of project can be used for:

    Local business mapping: Showing locations of stores, restaurants, or events on a map.

    Personal mapping: Allowing a user to track their travels or favorite spots.

    Geospatial data collection: For various use cases where you need to collect and display location-based data.

Strucuture Project
/xampp
  /htdocs
    /osm_map_app
      /index.html             ← Main front-end file
      /save_pin.php           ← PHP to save new pin (latitude, longitude)
      /get_pins.php           ← PHP to get all saved pins
      /delete_pin.php         ← PHP to delete a pin by ID
      /config.php             ← Database connection (optional)
      /css
        /style.css            ← Custom styles (optional)
      /js
        /main.js              ← JavaScript to handle the map, adding pins, etc.
      /uploads
        ← Folder for any file uploads (optional)
      /assets
        ← Folder for images, icons, etc.
      /database
        /osm_app_pins.sql     ← SQL to create database and table with sample data


