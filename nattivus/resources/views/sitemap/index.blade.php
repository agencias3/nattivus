<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ config('app.url') }}</loc>
        <lastmod>{{ date('Y-m-d') }}T00:00:00+00:00</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('home') }}</loc>
        <lastmod>{{ date('Y-m-d') }}T00:00:00+00:00</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('about') }}</loc>
        <lastmod>{{ date('Y-m-d') }}T00:00:00+00:00</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('category') }}</loc>
        <lastmod>{{ date('Y-m-d') }}T00:00:00+00:00</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    @if(!$categories->isEmpty())
        @foreach ($categories as $row)
            <?php
            $route = '';
            if($row->category_id){
                $route = route('category.sub_category', ['category' => $row->category->name, 'category_sub' => $row->seo_link]);
            }else{
                $route = route('category.show', $row->seo_link);
            }

            ?>
            <url>
                <loc>{{ $route }}</loc>
                <lastmod>{{ date('Y-m-d', strtotime($row->created_at)) }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.6</priority>
            </url>
        @endforeach
    @endif
    <url>
        <loc>{{ route('products') }}</loc>
        <lastmod>{{ date('Y-m-d') }}T00:00:00+00:00</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    @if(!$products->isEmpty())
        @foreach ($products as $row)
            <url>
                <loc>{{ route('product', $row->seo_link) }}</loc>
                <lastmod>{{ date('Y-m-d', strtotime($row->created_at)) }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.6</priority>
            </url>
        @endforeach
    @endif
    <url>
        <loc>{{ route('catalog') }}</loc>
        <lastmod>{{ date('Y-m-d') }}T00:00:00+00:00</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('blog') }}</loc>
        <lastmod>{{ date('Y-m-d') }}T00:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @if(!$tags->isEmpty())
        @foreach ($tags as $row)
            <url>
                <loc>{{ route('blog.tag', ['seo_link' => $row->seo_link]) }}</loc>
                <lastmod>{{ date('Y-m-d') }}T00:00:00+00:00</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.6</priority>
            </url>
        @endforeach
    @endif
    @if(!$posts->isEmpty())
        @foreach ($posts as $row)
            <url>
                <loc>{{ route('blog.show', ['seo_link' => $row->seo_link]) }}</loc>
                <lastmod>{{ $row->date }}T00:00:00+00:00</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.6</priority>
            </url>
        @endforeach
    @endif
    <url>
        <loc>{{ route('budget') }}</loc>
        <lastmod>{{ date('Y-m-d') }}T00:00:00+00:00</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('contact') }}</loc>
        <lastmod>{{ date('Y-m-d') }}T00:00:00+00:00</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('work') }}</loc>
        <lastmod>{{ date('Y-m-d') }}T00:00:00+00:00</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
</urlset>