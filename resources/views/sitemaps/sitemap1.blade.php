<?php echo '<?xml version="1.0" encoding="UTF-8" ?>'?>
<urlset>
  @foreach ($produits as $pro)
    <url>
      <loc>https://moniste.com/produits/{{ $pro->id }}</loc>
      <lastmod> {{ pro->created_at->toAtomString() }}</lastmod>
      <changefreq>weekly</changefreq>
      <priority>0.6</priority>
    </url>
  @endforeach
</urlset>