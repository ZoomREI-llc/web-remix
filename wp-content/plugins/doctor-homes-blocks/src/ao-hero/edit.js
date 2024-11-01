import { __ } from "@wordpress/i18n";
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import "./editor.css";


export default function Edit() {
	return (
		<div {...useBlockProps()}>
			<h3>{__("Absentee Owners Hero", "doctor-homes")}</h3>
			<InnerBlocks />
		</div>
	);
}
