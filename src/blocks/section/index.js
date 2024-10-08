import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';

registerBlockType('superhelix-blocks-v2/section', {
    title: 'Section Block',
    icon: 'smiley',
    category: 'widgets',
    attributes: {
        toggle: {
        type: 'boolean',
        default: false,
        },
    },
    edit: Edit,
    save: () => null,
});