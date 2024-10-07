import { __ } from "@wordpress/i18n";
import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";

import "./editor.css";

const ALLOWED_BLOCKS = ["gravityforms/form"];

// The edit function, which renders the block in the Gutenberg editor
export default function Edit({ attributes, setAttributes }) {
	return (
		<div {...useBlockProps()}>
			<div>
				<h3>{__("CW Hero", "doctor-homes-blocks")}</h3>
				<InnerBlocks allowedBlocks={ALLOWED_BLOCKS} />
			</div>
		</div>
	);
}
