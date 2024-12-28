import { __ } from "@wordpress/i18n";
import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";
import "./editor.css";

export default function Edit() {
	return (
		<div {...useBlockProps()}>
			<h3>
				{__("Sell Fast Hero Placeholder", "doctor-homes")}
				<InnerBlocks />
			</h3>
		</div>
	);
}
