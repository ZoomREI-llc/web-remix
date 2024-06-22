import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.css";

export default function Edit() {
	return (
		<div {...useBlockProps()}>
			<p>
				{__("FAQ Section – Add your questions and answers.", "doctor-homes")}
			</p>
		</div>
	);
}
