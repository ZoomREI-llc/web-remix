import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.css";

export default function Edit({ attributes, setAttributes }) {

	return (
		<div {...useBlockProps()}>
			<h3>{__("CW Meet Doctor Homes", "doctor-homes-blocks")}</h3>
		</div>
	);
}