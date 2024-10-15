import { __ } from "@wordpress/i18n";
import {
	useBlockProps,
	InspectorControls,
} from "@wordpress/block-editor";
import { PanelBody, TextControl } from "@wordpress/components";
import "./editor.css";

export default function Edit({ attributes, setAttributes }) {
	const { phoneNumber } = attributes;

	const onChangePhoneNumber = (value) => {
		setAttributes({ phoneNumber: value });
	};

	return (
		<div {...useBlockProps()}>
			<h3>{__("FAQ Form", "doctor-homes")}</h3>

			<InspectorControls>
				<PanelBody
					title={__("FAQ Form Settings", "doctor-homes-blocks")}
					initialOpen={true}
				>
					<TextControl
						label={__("Phone Number", "doctor-homes-blocks")}
						value={phoneNumber}
						onChange={onChangePhoneNumber}
						placeholder={__("Enter phone number", "doctor-homes-blocks")}
					/>
				</PanelBody>
			</InspectorControls>
		</div>
	);
}
