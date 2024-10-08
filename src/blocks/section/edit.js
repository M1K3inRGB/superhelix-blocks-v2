import { useState } from '@wordpress/element';
import { InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ToggleControl } from '@wordpress/components';

const Edit = ({ attributes, setAttributes }) => {
  const [toggle, setToggle] = useState(attributes.toggle);

  return (
    <>
      <InspectorControls>
        <PanelBody title="Toggle Settings">
          <ToggleControl
            label="Toggle"
            checked={toggle}
            onChange={(value) => {
              setToggle(value);
              setAttributes({ toggle: value });
            }}
          />
        </PanelBody>
      </InspectorControls>
      <div>
        <p>Toggle is {toggle ? 'On' : 'Off'}</p>
      </div>
    </>
  );
};

export default Edit;