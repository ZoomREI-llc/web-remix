import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.css";

// Static base path for logos relative to the plugin directory
const logosBasePath =
	"/wp-content/plugins/doctor-homes-blocks/src/cw-footer-v2/assets/";

export default function Edit({}) {
	const logoUrl =
		"/wp-content/plugins/doctor-homes-blocks/src/cw-footer-v2/assets/dh-logo-alt.svg";

	return (
		<div {...useBlockProps()}>
			<div className="cw-footer-v2">
				<div className="cw-footer-v2__logo">
					<img src={logoUrl} alt={__("Logo", "doctor-homes-blocks")} />
				</div>
				<div className="cw-footer-v2__brand-name">
					<h3>CW Footer V2</h3>
				</div>
			</div>
		</div>
	);
}
