<?php
      session_start(); // Starts session
      session_destroy(); // Destroy the actual session eliminating all saved data in cache
      header("Location: ./"); exit; // Redirect the user to main page
  ?>
