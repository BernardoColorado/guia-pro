<!DOCTYPE html>
<html lang="en">

<head>
  {% include 'templates/partials/main/head.php' %}
  {% block extraassets %}

  {% endblock %}
</head>

<body>
  <!-- Navbar -->
  {% include 'templates/partials/main/navbar.php' %}
  <!-- End Navbar -->

  <!-- Main Container -->
  <div class="container">
  <!-- BreadCrumb -->
  {% block breadcrumb %}
  
  {% endblock %}
  <!-- End BreadCrumb -->

  {% block content %}

  {% endblock %}
  
  </div>
  <!-- End Content -->

  <!-- Footer -->
  {% include 'templates/partials/main/footer.php' %}
  <!-- End Footer -->

  <!-- JS Assets -->
  {% include 'templates/partials/main/feet.php' %}
  <!-- End JS Assets -->
</body>
</html>