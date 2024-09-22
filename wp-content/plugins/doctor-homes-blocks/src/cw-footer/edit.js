import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.css";

// Static base path for logos relative to the plugin directory
const logosBasePath =
	"/wp-content/plugins/doctor-homes-blocks/src/cw-footer/assets/";

export default function Edit({ attributes, setAttributes }) {
	const logoUrl = `${logosBasePath}footer-logo.svg`;

	return (
		<div {...useBlockProps()}>
			<div className="cw-footer-edit">
				<div className="cw-footer__logo">
					<img src={logoUrl} alt={__("Logo", "doctor-homes-blocks")} />
				</div>
				<div className="cw-footer__brand-name">
					<h3>Doctor Homes Footer</h3>
				</div>
			</div>
		</div>
	);
}
