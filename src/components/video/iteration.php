<?php

// Check if there's a video ID
if ($youtube_video_id) {
    // If a video ID is provided, display the YouTube video
    ?>
<div id="comp-l072dqr0" data-testid="videoX" class="z4Uj6S comp-l072dqr0">
  <style data-testid="scrollEffectStyle">
  #comp-l072dqr0 iframe {
    width: 100%;
    height: 100%;
  }
  </style>
  <iframe id="video-comp-l072dqr0" src="https://www.youtube.com/embed/<?php echo esc_attr($youtube_video_id); ?>"
    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen style="object-fit: cover; width: 100%; height: 100%">
  </iframe>
</div>
<?php 
} else {
    if ($location_img_url) {
        // If no video ID, display the image
        ?>
<div id="comp-l072dqr0" data-testid="imageX" class="z4Uj6S comp-l072dqr0">
  <style data-testid="scrollEffectStyle">
  #comp-l072dqr0 img {
    height: 100%;
  }
  </style>
  <wix-image id="img-comp-l072dqr0">
    <picture>
      <img src="<?php echo esc_url($location_img_url); ?>" alt="" style="object-fit: cover; object-position: 41% 50%" />
    </picture>
  </wix-image>
</div>
<?php 
    }
}
?>