import { __ } from "@wordpress/i18n";
import {
	useBlockProps,
	InspectorControls,
	RichText,
} from "@wordpress/block-editor";
import { PanelBody, TextControl } from "@wordpress/components";
import "./editor.css";

// Static base path for logos relative to the plugin directory
const logosBasePath =
	"/wp-content/plugins/doctor-homes-blocks/src/cw-header/assets/";

export default function Edit({ attributes, setAttributes }) {
	const { phoneNumber } = attributes;

	const onChangePhoneNumber = (value) => {
		setAttributes({ phoneNumber: value });
	};

	const logoUrl = `${logosBasePath}header_logo.svg`;

	return (
		<div {...useBlockProps()}>
			<InspectorControls>
				<PanelBody
					title={__("Header Settings", "doctor-homes-blocks")}
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
			<div className="cw-header">
				<h3>{__("CW Header", "doctor-homes-blocks")}</h3>
				<div className="cw-header__logo">
					<img src={logoUrl} alt={__("Logo", "doctor-homes-blocks")} />
				</div>
				<div className="cw-header__phone-number">
					<RichText
						tagName="a"
						href={`tel:${phoneNumber}`}
						value={phoneNumber}
						onChange={onChangePhoneNumber}
						placeholder={__("Enter phone number", "doctor-homes-blocks")}
					/>
				</div>
			</div>
		</div>
	);
}
