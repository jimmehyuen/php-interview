<?php
  header('Content-type: text/css; charset:UTF-8');
?>

body {
  background-color: #E8E8E8;
}

h2 {
  background-color: #8B8D09;
  color: white;
}

.container {
  padding: 10px;
  display: grid;
  grid-template-columns: 70% 30%;
  <!-- grid-gap: 20px; -->
}

.container-bg {
  width: 66%;
}

.article-container {
  background-color: white;
  height: 100%;
}

.article-title {
  padding: 10px;
  font-size: 15px;
}

.event-container {
  background-color: #F8F8F8;
  width: auto;
}

.event-title {
  font-weight: bold;
  padding: 10px;
}

.card {
  margin: 10px;
}

.card-img {
  width: 100%;
}

.cards {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}

.card-title {
  height: auto;
  font-size: 15px;
  padding: 5px;
  color: black;
}
