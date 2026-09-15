<?php
/**
 * ARTÉVA LUXURY FURNITURE — PRODUCT & COLLECTION CATALOG DATA
 */

$collections = [
    [
        'id' => 'col-living',
        'title' => 'Living Room',
        'subtitle' => 'Curated sanctuary of comfort',
        'link' => 'shop.php?category=living',
        'html_link' => 'shop.html?category=living',
        'image' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'id' => 'col-bedroom',
        'title' => 'Bedroom',
        'subtitle' => 'Serene minimalist rest',
        'link' => 'shop.php?category=bedroom',
        'html_link' => 'shop.html?category=bedroom',
        'image' => 'https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'id' => 'col-dining',
        'title' => 'Dining Room',
        'subtitle' => 'Sculptural gathering spaces',
        'link' => 'shop.php?category=dining',
        'html_link' => 'shop.html?category=dining',
        'image' => 'https://images.unsplash.com/photo-1617806118233-18e1de247200?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'id' => 'col-office',
        'title' => 'Office',
        'subtitle' => 'Refined executive focus',
        'link' => 'shop.php?category=office',
        'html_link' => 'shop.html?category=office',
        'image' => 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=800&q=80'
    ]
];

$products = [
    [
        'id' => 'prod-1',
        'name' => 'Luxe Comfort Sofa',
        'category' => 'living',
        'category_name' => 'Living Room',
        'price' => 899.00,
        'old_price' => 1099.00,
        'tag' => 'Bestseller',
        'image' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=700&q=80',
        'desc' => 'Handcrafted solid European beech frame with feather-down cushion fill and high-performance Belgian boucle upholstery.'
    ],
    [
        'id' => 'prod-2',
        'name' => 'Oakwood Lounge Chair',
        'category' => 'living',
        'category_name' => 'Armchairs',
        'price' => 499.00,
        'old_price' => null,
        'tag' => 'Iconic',
        'image' => 'https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?auto=format&fit=crop&w=700&q=80',
        'desc' => 'Sculpted Japanese white oak framework with saddle-stitched Tuscan cognac leather and brass detailing.'
    ],
    [
        'id' => 'prod-3',
        'name' => 'Marble Top Coffee Table',
        'category' => 'living',
        'category_name' => 'Tables',
        'price' => 349.00,
        'old_price' => 420.00,
        'tag' => null,
        'image' => 'https://images.unsplash.com/photo-1533090161767-e6ffed986c88?auto=format&fit=crop&w=700&q=80',
        'desc' => 'Honed Carrara marble slab resting seamlessly upon an architectural matte black steel plinth.'
    ],
    [
        'id' => 'prod-4',
        'name' => 'Elena Dining Set (6 Seater)',
        'category' => 'dining',
        'category_name' => 'Dining Sets',
        'price' => 1289.00,
        'old_price' => 1450.00,
        'tag' => 'Craft Heritage',
        'image' => 'https://images.unsplash.com/photo-1615066390971-03e4e1c36ddf?auto=format&fit=crop&w=700&q=80',
        'desc' => 'Solid American walnut dining table complemented by six ergonomic curved oak chairs with linen seat cushions.'
    ],
    [
        'id' => 'prod-5',
        'name' => 'Aurelia Minimalist King Bed',
        'category' => 'bedroom',
        'category_name' => 'Beds',
        'price' => 1450.00,
        'old_price' => 1650.00,
        'tag' => 'New Arrival',
        'image' => 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=700&q=80',
        'desc' => 'Floating low-profile platform bed with integrated floating nightstands and woven textural linen headboard.'
    ],
    [
        'id' => 'prod-6',
        'name' => 'Artisan Walnut Credenza',
        'category' => 'living',
        'category_name' => 'Storage',
        'price' => 780.00,
        'old_price' => null,
        'tag' => null,
        'image' => 'https://images.unsplash.com/photo-1595428774223-ef52624120d2?auto=format&fit=crop&w=700&q=80',
        'desc' => 'Slatted tambour sliding doors crafted from sustainably harvested walnut with soft-closing bronze hardware.'
    ],
    [
        'id' => 'prod-7',
        'name' => 'Modena Executive Desk',
        'category' => 'office',
        'category_name' => 'Desks',
        'price' => 920.00,
        'old_price' => 1100.00,
        'tag' => 'Featured',
        'image' => 'https://images.unsplash.com/photo-1518455027359-f3f8164ba6bd?auto=format&fit=crop&w=700&q=80',
        'desc' => 'Architectural executive writing desk with hidden wire management, brushed brass accents, and full-grain leather inlay.'
    ],
    [
        'id' => 'prod-8',
        'name' => 'Nórdica Alabaster Pendant Lamp',
        'category' => 'lighting',
        'category_name' => 'Lighting',
        'price' => 290.00,
        'old_price' => null,
        'tag' => 'Bespoke',
        'image' => 'https://images.unsplash.com/photo-1507473885765-e6ed057f782c?auto=format&fit=crop&w=700&q=80',
        'desc' => 'Translucent carved Spanish alabaster sphere diffusing soft ambient warmth with burnished bronze canopy.'
    ]
];

$journal_articles = [
    [
        'date' => 'MAY 20, 2026',
        'title' => '5 Ways to Style Your Luxury Living Room',
        'image' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Explore the subtle interplay of organic textures, low-profile seating, and soft architectural lighting.'
    ],
    [
        'date' => 'MAY 18, 2026',
        'title' => 'Choosing the Perfect Artisan Dining Table',
        'image' => 'https://images.unsplash.com/photo-1617806118233-18e1de247200?auto=format&fit=crop&w=800&q=80',
        'summary' => 'A comprehensive guide to grain matching, live edges, and proportioning heirloom-grade dining furniture.'
    ],
    [
        'date' => 'MAY 10, 2026',
        'title' => 'Bedroom Furniture Trends for Modern Sanctuaries',
        'image' => 'https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Creating peaceful minimalist sleep sanctuaries through tactile materials, gentle earth tones, and warm oak.'
    ]
];
