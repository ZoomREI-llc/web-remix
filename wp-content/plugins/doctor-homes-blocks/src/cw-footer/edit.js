import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.css";

export default function Edit() {
	const logoUrl =
		"/wp-content/plugins/doctor-homes-blocks/src/cw-footer/assets/dh-logo.svg";

	return (
		<div {...useBlockProps()}>
			<div className="cw-footer">
				<div className="cw-footer__logo">
					<img src={logoUrl} alt={__("Logo", "doctor-homes-blocks")} />
				</div>
				<div className="cw-footer__brand-name">
					<h3>CW Footer</h3>
				</div>
			</div>
		</div>
	);
}
