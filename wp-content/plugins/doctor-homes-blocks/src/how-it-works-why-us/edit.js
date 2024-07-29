import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.css";

export default function Edit() {
	return (
		<div {...useBlockProps()}>
			<h3>
				{__("How It Works Why Us Placeholder", "doctor-homes")}
			</h3>
		</div>
	);
}
