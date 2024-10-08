<?php

    function render_section_block( $attributes ) {
        $toggle = isset($attributes['toggle']) && $attributes['toggle'] ? 'On' : 'Off';
        return 'Toggle is ' . $toggle;
    }