<div class="floating-icons">
  <a
    href="https://api.whatsapp.com/send?text=<?php echo urlencode($title . ' ' . base_url('product/' . $product_id)); ?>"
    class="share-button whatsapp"><i class="fab fa-whatsapp"></i></a>
    <!-- Tombol Share ke Facebook -->
  <a 
    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($title . ' ' . base_url('product/' . $product_id)); ?>" 
    target="_blank" class="share-button facebook"><i class="fab fa-facebook-f"></i></a>
  </div>

