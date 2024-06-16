import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.css";

const placeholderImage = "https://via.placeholder.com/150";

export default function Edit() {
	const blockProps = useBlockProps();

	return (
		<div {...blockProps}>
			<h2>{__("Benefits", "doctor-homes-blocks")}</h2>
			<p>{__("Here are the benefits we offer:", "doctor-homes-blocks")}</p>
			<div className="benefits-grid">
				<div className="benefit-item">
					<img src={placeholderImage} alt="Fixer Upper" />
					<p>{__("Fixer Upper", "doctor-homes-blocks")}</p>
				</div>
				<div className="benefit-item">
					<img src={placeholderImage} alt="Job Relocation" />
					<p>{__("Job Relocation", "doctor-homes-blocks")}</p>
				</div>
				<div className="benefit-item">
					<img src={placeholderImage} alt="Downsizing or Upsizing" />
					<p>{__("Downsizing or Upsizing", "doctor-homes-blocks")}</p>
				</div>
				<div className="benefit-item">
					<img src={placeholderImage} alt="Inherited Property" />
					<p>{__("Inherited Property", "doctor-homes-blocks")}</p>
				</div>
				<div className="benefit-item">
					<img src={placeholderImage} alt="Vacant Property" />
					<p>{__("Vacant Property", "doctor-homes-blocks")}</p>
				</div>
				<div className="benefit-item">
					<img src={placeholderImage} alt="Tenant Trouble" />
					<p>{__("Tenant Trouble", "doctor-homes-blocks")}</p>
				</div>
				<div className="benefit-item">
					<img src={placeholderImage} alt="Water & Fire Damage" />
					<p>{__("Water & Fire Damage", "doctor-homes-blocks")}</p>
				</div>
				<div className="benefit-item">
					<img src={placeholderImage} alt="Financial Issues" />
					<p>{__("Financial Issues", "doctor-homes-blocks")}</p>
				</div>
				<div className="benefit-item">
					<img src={placeholderImage} alt="Unexpected Life Events" />
					<p>{__("Unexpected Life Events", "doctor-homes-blocks")}</p>
				</div>
				<div className="benefit-item">
					<img src={placeholderImage} alt="Divorce" />
					<p>{__("Divorce", "doctor-homes-blocks")}</p>
				</div>
			</div>
		</div>
	);
}
