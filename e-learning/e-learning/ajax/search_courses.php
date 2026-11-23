<?php
include '../db/conn.php';

$query = $_GET['q'] ?? '';
$search = mysqli_real_escape_string($conn, $query);

$sql = "SELECT * FROM courses WHERE name LIKE '%$search%' OR description LIKE '%$search%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
  echo "<p style='text-align:center;'>No matching courses found.</p>";
} else {
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="course-card">';
    echo '<img src="uploads/thumbnails/' . $row['thumbnail'] . '" alt="' . $row['name'] . '">';
    echo '<h3>' . $row['name'] . '</h3>';
    echo '<p>⭐ ' . number_format($row['rating'], 1) . ' (' . $row['total_ratings'] . ' ratings)</p>';
    echo '<a href="../course.php?id=' . $row['id'] . '">View Course</a>';
    echo '</div>';
  }
}
?>
