import { __ } from "@wordpress/i18n";
import {
	useBlockProps,
	InspectorControls,
	RichText,
} from "@wordpress/block-editor";
import { PanelBody, SelectControl, TextControl } from "@wordpress/components";
import "./editor.css";

export default function Edit({ attributes, setAttributes }) {
	const { phoneNumber } = attributes;

	const onChangePhoneNumber = (value) => {
		setAttributes({ phoneNumber: value });
	};

	const logoUrl =
		"/wp-content/plugins/doctor-homes-blocks/src/lc-header/assets/dh-logo.svg";

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
			<div className="lc-header">
				<h3>{__("Life Changes Header", "doctor-homes-blocks")}</h3>
				<div className="lc-header__logo">
					<img src={logoUrl} alt={__("Logo", "doctor-homes-blocks")} />
				</div>
				<div className="lc-header__phone-number">
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
