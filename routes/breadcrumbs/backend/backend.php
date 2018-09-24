<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});
// BREADCRUMS FOR OC HEALTH
Breadcrumbs::for('admin.products.index', function ($trail) {
    $trail->push(__('strings.backend.products.title'), route('admin.products.index'));
});

Breadcrumbs::for('admin.products.edit', function ($trail) {
    $trail->parent('admin.products.index');
    $trail->push('edit', route('admin.products.edit', ''));
//    $trail->push(__('strings.backend.products.add_product.title'), route('admin.products.edit'));
});

Breadcrumbs::for('admin.products.create', function ($trail) {
    $trail->parent('admin.products.index');
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.products.create'));
});

Breadcrumbs::for('admin.products.show', function ($trail) {
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.products.show'));
});

// BREADCRUMS FOR INSURANCE
Breadcrumbs::for('admin.insurance.index', function ($trail) {
    $trail->push(__('Insurance'), route('admin.insurance.index'));
});

Breadcrumbs::for('admin.insurance.edit', function ($trail) {
    $trail->parent('admin.insurance.index');
    $trail->push('edit', route('admin.insurance.edit', ''));
//    $trail->push(__('strings.backend.products.add_product.title'), route('admin.products.edit'));
});

Breadcrumbs::for('admin.insurance.create', function ($trail) {
    $trail->parent('admin.insurance.index');
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.insurance.create'));
});

Breadcrumbs::for('admin.insurance.show', function ($trail) {
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.insurance.show'));
});

// BREADCRUMS FOR MUSIC APPS
Breadcrumbs::for('admin.music-app.index', function ($trail) {
    $trail->push(__('Music Apps'), route('admin.music-app.index'));
});

Breadcrumbs::for('admin.music-app.edit', function ($trail) {
    $trail->parent('admin.music-app.index');
    $trail->push('edit', route('admin.music-app.edit', ''));
//    $trail->push(__('strings.backend.products.add_product.title'), route('admin.products.edit'));
});

Breadcrumbs::for('admin.music-app.create', function ($trail) {
    $trail->parent('admin.music-app.index');
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.music-app.create'));
});

Breadcrumbs::for('admin.music-app.show', function ($trail) {
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.music-app.show'));
});

// BREADCRUMS FOR ONLINE TRAINING
Breadcrumbs::for('admin.online-training.index', function ($trail) {
    $trail->push(__('Online Training'), route('admin.online-training.index'));
});

Breadcrumbs::for('admin.online-training.edit', function ($trail) {
    $trail->parent('admin.online-training.index');
    $trail->push('edit', route('admin.online-training.edit', ''));
});

Breadcrumbs::for('admin.online-training.create', function ($trail) {
    $trail->parent('admin.online-training.index');
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.online-training.create'));
});

Breadcrumbs::for('admin.online-training.show', function ($trail) {
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.online-training.show'));
});

// BREADCRUMS FOR REWARDS
Breadcrumbs::for('admin.reward.index', function ($trail) {
    $trail->push(__('Rewards'), route('admin.reward.index'));
});

Breadcrumbs::for('admin.reward.edit', function ($trail) {
    $trail->parent('admin.reward.index');
    $trail->push('edit', route('admin.reward.edit', ''));
});

Breadcrumbs::for('admin.reward.create', function ($trail) {
    $trail->parent('admin.reward.index');
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.reward.create'));
});

Breadcrumbs::for('admin.reward.show', function ($trail) {
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.reward.show'));
});

// BREADCRUMS FOR CATEGORIES
Breadcrumbs::for('admin.categories.index', function ($trail) {
    $trail->push(__('Categories'), route('admin.categories.index'));
});

Breadcrumbs::for('admin.categories.edit', function ($trail) {
    $trail->parent('admin.categories.index');
    $trail->push('edit', route('admin.categories.edit', ''));
});

Breadcrumbs::for('admin.categories.create', function ($trail) {
    $trail->parent('admin.categories.index');
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.categories.create'));
});

Breadcrumbs::for('admin.categories.show', function ($trail) {
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.categories.show'));
});
require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
