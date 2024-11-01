import { __ } from "@wordpress/i18n";
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, TextControl } from "@wordpress/components";
import "./editor.css";

export default function Edit({ attributes, setAttributes }) {
	const { btnText } = attributes;

	const onChangeBtnText = (value) => {
		setAttributes({ btnText: value });
	};

	return (
		<div {...useBlockProps()}>
			<InspectorControls>
				<PanelBody
					title={__("Header Settings", "doctor-homes-blocks")}
					initialOpen={true}
				>
					<TextControl
						label={__("Button text", "doctor-homes-blocks")}
						value={btnText}
						onChange={onChangeBtnText}
						placeholder={__("Enter button text", "doctor-homes-blocks")}
					/>
				</PanelBody>
			</InspectorControls>
			<h3>
				{__("DH Lead Form Placeholder", "doctor-homes")}
			</h3>
		</div>
	);
}
