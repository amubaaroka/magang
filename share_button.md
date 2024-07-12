<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .share-button {
            display: inline-block;
            padding: 10px 15px;
            margin: 5px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }

        .share-button.facebook {
            background-color: #4267B2;
        }

        .share-button.facebook:hover {
            background-color: #365899;
        }

        .share-button.whatsapp {
            background-color: #25D366;
        }

        .share-button.whatsapp:hover {
            background-color: #1DA851;
        }

        .share-button i {
            margin-right: 5px;
        }
    </style>

<div class="floating-icons">
  <a
    href="https://api.whatsapp.com/send?text=<?php echo urlencode($title . ' ' . base_url('product/' . $product_id)); ?>"
    class="share-button whatsapp"><i class="fab fa-whatsapp"></i></a>
    <!-- Tombol Share ke Facebook -->
  <a 
    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($title . ' ' . base_url('product/' . $product_id)); ?>" 
    target="_blank" class="share-button facebook"><i class="fab fa-facebook-f"></i></a>
  </div>

