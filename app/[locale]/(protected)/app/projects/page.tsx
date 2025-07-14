
import { redirect } from '@/components/navigation'

const ProjectPage = ({ params: { locale } }: { params: { locale: string } }) => {
  redirect({ href: '/app/projects/grid', locale })
  return null
}

export default ProjectPage