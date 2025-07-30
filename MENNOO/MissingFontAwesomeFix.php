
add_filter('elementor/icons_manager/additional_tabs', function ($tabs) {
    if (isset($tabs['fa-solid'])) {
        $tabs['fa-solid']['icons']['play'] = [
            'name' => 'play',
            'unicode' => 'f04b',
            'label' => 'Play',
            'prefix' => 'fas fa-',
        ];
    }
    return $tabs;
});
