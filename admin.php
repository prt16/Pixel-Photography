<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: http://localhost/Assigment/login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: beige;
    }

    .tab-content {
      padding: 30px;
      border: 1px solid #dee2e6;
      background-color: whitesmoke;
    }

    .tabs-container {
      display: flex;
      justify-content: space-between;
    }

    .tabs {
      flex: 1;
      margin-right: 20px;
    }

    .tab-content-container {
      flex: 3;
    }
    .logout-container {
    text-align: center;
    margin-top: 20px;
  }

  .logout-link {
    display: inline-block;
    padding: 8px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

  .logout-link:hover {
    background-color: #dc3545; /* Red color on hover */
  }
  .contact-container {
      margin-top: 30px;
    }

    .contact-table {
      width: 100%;
      border-collapse: collapse;
    }

    .contact-table th,
    .contact-table td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
    }

    .contact-table th {
      background-color: #f2f2f2;
    }

    .btn-action {
      margin-right: 5px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center">Admin Panel</h1>

    <div class="tabs-container">
      <div class="tabs">
        <ul class="nav flex-column nav-tabs" id="adminTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
              role="tab" aria-controls="home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button"
              role="tab" aria-controls="gallery" aria-selected="false">Gallery</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button"
              role="tab" aria-controls="skills" aria-selected="false">Skills</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
              role="tab" aria-controls="contact" aria-selected="false">Contact Messages</button>
          </li>
        </ul>
      </div>

      <div class="tab-content-container">
        <div class="tab-content" id="adminTabsContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form method="post">
              <div class="mb-3">
                <label for="homeDescription" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="homeDescription" rows="5"
                  placeholder="Enter home page description"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="home">Update</button>
            </form>

            <?php
            include "connection.php";
            // Handle form submission for updating home section
            if (isset($_POST['home'])) {
              $description = $_POST['description'];
              $query2 = "UPDATE home SET Description = '$description' WHERE textid = 1;";
              $home = mysqli_query($conn, $query2);
              if ($home) {
                echo '<div class="alert alert-success mt-3">Home section updated successfully.</div>';
              } else {
                echo '<div class="alert alert-danger mt-3">Error updating home section.</div>';
              }
            }
            ?>
          </div>

          <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
            <form method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="galleryFile" class="form-label">Upload Files</label>
                <input type="file" class="form-control" id="galleryFile" name="image[]" multiple>
              </div>
              <div class="mb-3">
                <label for="category" class="form-label">Select Category</label>
                <select class="form-control" id="category" name="category">
                  <option value="Human">Human</option>
                  <option value="Nature">Nature</option>
                  <option value="Country">Country</option>
                  <option value="Video">Wedding</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            <div class="row mt-3">
              <?php
              include "connection.php";

              // Display existing images in a grid layout
              $query_select_images = "SELECT img_id, img_name FROM image";
              $result_select_images = mysqli_query($conn, $query_select_images);

              if ($result_select_images && mysqli_num_rows($result_select_images) > 0) {
                while ($row = mysqli_fetch_assoc($result_select_images)) {
                  $img_id = htmlspecialchars($row['img_id']);
                  $img_name = htmlspecialchars($row['img_name']);
                  $img_path = 'img/' . $img_name;

                  echo '<div class="col-md-4 mb-3">';
                  echo '<div class="card">';
                  echo '<img src="' . $img_path . '" class="card-img-top" alt="' . $img_name . '">';
                  echo '<div class="card-body">';
                  echo '<h5 class="card-title">' . $img_name . '</h5>';
                  echo '<form method="post">';
                  echo '<input type="hidden" name="img_id" value="' . $img_id . '">';
                  echo '<button type="submit" class="btn btn-danger btn-sm" name="delete">Delete</button>';
                  echo '</form>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                }
              } else {
                echo "<p>No images found.</p>";
              }
              ?>
            </div>
            <?php
            // Handle image upload
            if (isset($_POST['submit'])) {
              if (isset($_FILES['image']) && isset($_POST['category'])) {
                $uploaded = [];
                $errors = [];
                $category = mysqli_real_escape_string($conn, $_POST['category']);

                // Loop through each uploaded file
                foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
                  $file_name = $_FILES['image']['name'][$key];
                  $file_size = $_FILES['image']['size'][$key];
                  $file_tmp = $_FILES['image']['tmp_name'][$key];
                  $file_type = $_FILES['image']['type'][$key];
                  $file_error = $_FILES['image']['error'][$key];

                  // Check for errors
                  if ($file_error !== UPLOAD_ERR_OK) {
                    $errors[] = "Error uploading $file_name";
                    continue;
                  }

                  // Validate file type
                  $allowed_types = ['image/jpeg', 'image/png', 'image/jpg'];
                  if (!in_array($file_type, $allowed_types)) {
                    $errors[] = "Unsupported file type: $file_name";
                    continue;
                  }

                  // Limit file size
                  $max_size = 2 * 1024 * 1024; // 2MB
                  if ($file_size > $max_size) {
                    $errors[] = "File size exceeds limit: $file_name";
                    continue;
                  }

                  // Move uploaded file
                  $target_dir = 'img/';
                  $target_file = $target_dir . basename($file_name);

                  if (move_uploaded_file($file_tmp, $target_file)) {
                    $uploaded[] = $file_name;
                    $query = "INSERT INTO image (img_name, category) VALUES ('$file_name', '$category')";
                    $result = mysqli_query($conn, $query);
                    if (!$result) {
                      $errors[] = "Error inserting $file_name into database";
                    }
                  } else {
                    $errors[] = "Error moving $file_name to directory";
                  }
                }

                // Output success or errors
                if (!empty($uploaded)) {
                  echo '<div class="alert alert-success mt-3">Files uploaded successfully: ' . implode(', ', $uploaded) . '</div>';
                }
                if (!empty($errors)) {
                  echo '<div class="alert alert-danger mt-3">' . implode('<br>', $errors) . '</div>';
                }
              }
            }
            ?>
          </div>

          <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
            <h3>Add New Skill</h3>
            <form method="post">
              <div class="mb-3">
                <label for="skillName" class="form-label">Skill Name</label>
                <input type="text" class="form-control" id="skillName" name="skill_name" required>
              </div>
              <div class="mb-3">
                <label for="skillDescription" class="form-label">Skill Description</label>
                <textarea class="form-control" id="skillDescription" name="skill_description" rows="3"
                  required></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="add_skill">Add Skill</button>
            </form>

            <?php
            include "connection.php";

            // Handle form submission for adding new skill
            if (isset($_POST['add_skill'])) {
              $skill_name = mysqli_real_escape_string($conn, $_POST['skill_name']);
              $skill_description = mysqli_real_escape_string($conn, $_POST['skill_description']);
              $query_skill = "INSERT INTO skills (name, description) VALUES ('$skill_name', '$skill_description')";
              $result_skill = mysqli_query($conn, $query_skill);

              if ($result_skill) {
                echo '<div class="alert alert-success mt-3">Skill added successfully.</div>';
              } else {
                echo '<div class="alert alert-danger mt-3">Error adding skill.</div>';
              }
            }

            // Display existing skills and provide delete option
            $query_select_skills = "SELECT * FROM skills";
            $result_select_skills = mysqli_query($conn, $query_select_skills);

            if ($result_select_skills && mysqli_num_rows($result_select_skills) > 0) {
              echo '<ul class="list-group mt-3">';
              while ($row = mysqli_fetch_assoc($result_select_skills)) {
                $id = $row['id'];
                $skill_name = htmlspecialchars($row['name']);
                $skill_description = htmlspecialchars($row['description']);

                echo '<li class="list-group-item">';
                echo '<div class="d-flex justify-content-between">';
                echo '<div>';
                echo '<h5 class="mb-1">' . $skill_name . '</h5>';
                echo '<p class="mb-1">' . $skill_description . '</p>';
                echo '</div>';
                echo '<form method="post">';
                echo '<input type="hidden" name="skill_id" value="' . $id . '">';
                echo '<button type="submit" class="btn btn-danger btn-sm" name="delete_skill">Delete</button>';
                echo '</form>';
                echo '</div>';
                echo '</li>';
              }
              echo '</ul>';
            } else {
              echo '<p>No skills found.</p>';
            }

            // Handle skill deletion
            if (isset($_POST['delete_skill'])) {
              $skill_id = $_POST['skill_id'];

              // Delete skill from database
              $query_delete_skill = "DELETE FROM skills WHERE id = $skill_id";
              $result_delete_skill = mysqli_query($conn, $query_delete_skill);

              if ($result_delete_skill) {
                echo '<div class="alert alert-success mt-3">Skill deleted successfully.</div>';
              } else {
                echo '<div class="alert alert-danger mt-3">Error deleting skill.</div>';
              }
            }
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>

  <?php
  // Handle image deletion
  if (isset($_POST['delete'])) {
    $img_id = $_POST['img_id'];

    // Get image filename from database
    $query_select_img = "SELECT img_name FROM image WHERE img_id = ?";
    $stmt = mysqli_prepare($conn, $query_select_img);
    mysqli_stmt_bind_param($stmt, "i", $img_id);
    mysqli_stmt_execute($stmt);
    $result_select_img = mysqli_stmt_get_result($stmt);

    if ($result_select_img && mysqli_num_rows($result_select_img) > 0) {
      $row = mysqli_fetch_assoc($result_select_img);
      $img_path = 'img/' . $row['img_name']; // Adjust directory path as per your setup
  
      // Delete image file from filesystem
      if (file_exists($img_path)) {
        unlink($img_path); // Delete file
      }

      // Delete image record from database
      $query_delete_img = "DELETE FROM image WHERE img_id = ?";
      $stmt = mysqli_prepare($conn, $query_delete_img);
      mysqli_stmt_bind_param($stmt, "i", $img_id);
      mysqli_stmt_execute($stmt);

      if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "<div class='alert alert-success mt-3'>Image deleted successfully.</div>";
      } else {
        echo "<div class='alert alert-danger mt-3'>Error deleting image record from database.</div>";
      }
    } else {
      echo "<div class='alert alert-danger mt-3'>Image not found or invalid ID.</div>";
    }
  }
  ?>
          <!-- Contact Tab Content -->
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="contact-container">
              <h3>Contact Messages</h3>
              <table class="contact-table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Comments</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                   <?php
                  include "connection.php";
                  // Fetch contact messages from database
                  $query = "SELECT * FROM contact";
                  $result = mysqli_query($conn, $query);

                  if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $firstName = htmlspecialchars($row['First_name']);
                      $lastName = htmlspecialchars($row['Last_name']);
                      $email = htmlspecialchars($row['Email']);
                      $comments = isset($row['comments']) ? htmlspecialchars($row['comments']) : 'No comments';

                      echo '<tr>';
                      echo '<td>' . $id . '</td>';
                      echo '<td>' . $firstName . '</td>';
                      echo '<td>' . $lastName . '</td>';
                      echo '<td>' . $email . '</td>';
                      echo '<td>' . $comments . '</td>';
                      echo '<td>';
                      echo '<a href="mailto:' . $email . '?subject=Reply to your message&body=Hello ' . $firstName . ' ' . $lastName . ',%0D%0A%0D%0A" class="btn btn-primary btn-sm btn-action">Reply</a>';
                      echo '<form method="post" action="delete_contact.php" style="display:inline">';
                      echo '<input type="hidden" name="contact_id" value="' . $id . '">';
                      echo '<button type="submit" class="btn btn-danger btn-sm btn-action" onclick="return confirm(\'Are you sure you want to delete this message?\')">Delete</button>';
                      echo '</form>';
                      echo '</td>';
                      echo '</tr>';
                    }
                  } else {
                    echo '<tr><td colspan="6">No messages found.</td></tr>';
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="logout-container">
  <form action="logout.php" method="post">
    <button type="submit" class="logout-link">Logout</button>
  </form>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
