<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header text-center" style="background-color: #F5F5F5; padding: 40px; border-bottom: 5px solid #1E88E5;">
    <h1 style="color: #283593; font-family: 'Roboto', sans-serif; font-weight: bold;">
      Centro de Operaciones <br>
      <small style="color: #1E88E5; font-size: 1.5em;">Doctor Simi - Panel de Control</small>
    </h1>
  </section>

  <!-- Imagen de Doctor Simi (full-width) -->
  <div style="width: 100%; text-align: center; margin: 20px 0;">
    <img src="https://farmaciassimilaresmx.vtexassets.com/arquivos/assets-brand-fmx-desktop-min.png" alt="Doctor Simi" style="width: 100%; max-height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- Total Productos -->
      <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background: linear-gradient(135deg, #1976D2, #2196F3); color: #FFF;">
          <div class="inner">
            <h3><?php echo $total_products; ?></h3>
            <p>Total Productos</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="<?php echo base_url('products/') ?>" class="small-box-footer" style="color: #FFF;">Más información <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Pedidos Pagados -->
      <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background: linear-gradient(135deg, #0D47A1, #1565C0); color: #FFF;">
          <div class="inner">
            <h3><?php echo $total_paid_orders; ?></h3>
            <p>Pedidos Pagados</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="<?php echo base_url('orders/') ?>" class="small-box-footer" style="color: #FFF;">Más información <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Usuarios Totales -->
      <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background: linear-gradient(135deg, #42A5F5, #64B5F6); color: #FFF;">
          <div class="inner">
            <h3><?php echo $total_users; ?></h3>
            <p>Usuarios Totales</p>
          </div>
          <div class="icon">
            <i class="ion ion-android-people"></i>
          </div>
          <a href="<?php echo base_url('users/') ?>" class="small-box-footer" style="color: #FFF;">Más información <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Sucursales Totales -->
      <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background: linear-gradient(135deg, #1E88E5, #5C6BC0); color: #FFF;">
          <div class="inner">
            <h3><?php echo $total_stores; ?></h3>
            <p>Sucursales Totales</p>
          </div>
          <div class="icon">
            <i class="ion ion-android-home"></i>
          </div>
          <a href="<?php echo base_url('stores/') ?>" class="small-box-footer" style="color: #FFF;">Más información <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- JS for Active Menu -->
<script type="text/javascript">
  $(document).ready(function() {
    $("#dashboardMainMenu").addClass('active');
  });
</script>
