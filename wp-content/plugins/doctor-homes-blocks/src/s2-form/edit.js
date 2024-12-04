import { __ } from "@wordpress/i18n";
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import "./editor.css";

export default function Edit({ attributes, setAttributes }) {
	return (
		<div {...useBlockProps()}>
			<h3>{__("Step 2 Form", "chris-buys")}</h3>
			<InnerBlocks />
		</div>
	);
}
