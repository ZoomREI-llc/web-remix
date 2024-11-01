import { __ } from "@wordpress/i18n";
import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";

import "./editor.css";

// The edit function, which renders the block in the Gutenberg editor
export default function Edit({ attributes, setAttributes }) {
	return (
		<div {...useBlockProps()}>
			<div>
				<h3>{__("CW Hero", "doctor-homes-blocks")}</h3>
				<InnerBlocks />
			</div>
		</div>
	);
}
