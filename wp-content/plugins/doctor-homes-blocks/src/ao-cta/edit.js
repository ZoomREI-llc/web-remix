import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.css";

export default function Edit({ attributes, setAttributes }) {
	return (
		<div {...useBlockProps()}>
			<h3>{__("AO CTA", "doctor-homes")}</h3>
		</div>
	);
}
