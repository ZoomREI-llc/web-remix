import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";

import "./editor.css";


// The edit function, which renders the block in the Gutenberg editor
export default function Edit({ attributes, setAttributes }) {
	return (
		<div {...useBlockProps()}>
			<div>
				<h3>{__("DH Hero Form Placeholder", "doctor-homes-blocks")}</h3>
			</div>
		</div>
	);
}
